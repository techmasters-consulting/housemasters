<?php

namespace Tests\Unit\Jobs;

use App\Jobs\NotifyAllVoters;
use App\Mail\IdeaStatusUpdatedMailable;
use App\Models\Category;
use App\Models\Idea;
use App\Models\Status;
use App\Models\User;
use App\Models\Vote;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Mail;
use Tests\TestCase;

class NotifyAllVotersTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_sends_an_email_to_all_voters()
    {
        $user = User::factory()->create([
            'email' => 'housemaster.mu@gmail.com',
        ]);

        $userB = User::factory()->create([
            'email' => 'housemaster.mu@gmail.com',
        ]);

        $idea = Idea::factory()->create();

        Vote::create([
            'idea_id' => $idea->id,
            'user_id' => $user->id,
        ]);

        Vote::create([
            'idea_id' => $idea->id,
            'user_id' => $userB->id,
        ]);

        Mail::fake();

        NotifyAllVoters::dispatch($idea);

        Mail::assertQueued(IdeaStatusUpdatedMailable::class, function ($mail) {
            return $mail->hasTo('housemaster.mu@gmail.com')
                && $mail->build()->subject === 'A Property you voted for has a new status';
        });

        Mail::assertQueued(IdeaStatusUpdatedMailable::class, function ($mail) {
            return $mail->hasTo('housemaster.mu@gmail.com')
                && $mail->build()->subject === 'A Property you voted for has a new status';
        });
    }
}
