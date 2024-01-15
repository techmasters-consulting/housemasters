<div>
    @auth
        <form wire:submit.prevent="createIdea" action="#" method="POST" class="space-y-4 px-4 py-6">
            <div>
                <input wire:model.defer="title" type="text" class="w-full text-sm bg-gray-100 border-none rounded-xl placeholder-gray-900 px-4 py-2" placeholder="Name Your Property" required>
                @error('title')
                    <p class="text-red text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <select wire:model.defer="location" name="location_add" id="location_add" class="w-full bg-gray-100 text-sm rounded-xl border-none px-4 py-2">
                    @foreach ($locations as $location)
                        <option value="{{ $location->id }}">{{ $location->name }} </option>
                    @endforeach
                </select>
                @error('location')
                <p class="text-red text-xs mt-1">{{ $message }}</p>
            @enderror
            </div>
            
            <div>
                <select wire:model.defer="category" name="category_add" id="category_add" class="w-full bg-gray-100 text-sm rounded-xl border-none px-4 py-2">
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
                @error('category')
                <p class="text-red text-xs mt-1">{{ $message }}</p>
            @enderror
            </div>
         
            <div>
                <input wire:model.defer="price" class="w-full text-sm bg-gray-100 border-none rounded-xl placeholder-gray-900 px-4 py-2" type="number" min="0.00" max="10000.00" step="0.01" placeholder="How much?" required
                />
                @error('price')
                    <p class="text-red text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

          
            <div>
                <textarea wire:model.defer="description" name="idea" id="idea" cols="30" rows="4" class="w-full bg-gray-100 rounded-xl border-none placeholder-gray-900 text-sm px-4 py-2" placeholder="Describe your Property" required></textarea>
                @error('description')
                    <p class="text-red text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
      
            <div class="flex items-center space-x-3">
                <div>
                            @error('photo.*') <span class="error">{{ $message }}</span> @enderror
                    @if ($photo) 
                   
                    <img src="{{ $photo->temporaryUrl()}}">
                    @endif

                </div>
                <div>
                    <label for="file-upload" class="custom-file-upload">
                    <i class="fa fa-cloud-upload"></i> Custom Upload
                </label>

                <input id="file-upload" type="file" wire:model="photo" />
                </div>
        </div>
            <div class="flex items-center justify-between space-x-3">

                <!-- <button
                    type="file"
                    class="flex items-center justify-center w-1/2 h-11 text-xs bg-gray-200 font-semibold rounded-xl border border-gray-200 hover:border-gray-400 transition duration-150 ease-in px-6 py-3"
                >
                    <svg class="text-gray-600 w-4 transform -rotate-45" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13" />
                    </svg>
                    <span class="ml-1">Upload</span>
                </button>` -->
                       <button
                    type="submit"
                    class="flex items-center justify-center w-1/2 h-11 text-xs bg-blue text-white font-semibold rounded-xl border border-blue hover:bg-blue-hover transition duration-150 ease-in px-6 py-3"
                >
                    <span class="ml-1">Submit</span>
                </button>
            </div>
        </form>
    @else
        <div class="my-6 text-center">
            <a
                wire:click.prevent="redirectToLogin"
                href="{{ route('login') }}"
                class="inline-block justify-center w-1/2 h-11 text-xs bg-blue text-white font-semibold rounded-xl border border-blue hover:bg-blue-hover transition duration-150 ease-in px-4 py-3"
            >
                Login
            </a>
            <a
                wire:click.prevent="redirectToRegister"
                href="{{ route('register') }}"
                class="inline-block justify-center w-1/2 h-11 text-xs bg-gray-200 font-semibold rounded-xl border border-gray-200 hover:border-gray-400 transition duration-150 ease-in px-4 py-3 mt-4"
            >
                Sign Up
            </a>
        </div>
    @endauth
</div>
