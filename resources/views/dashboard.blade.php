<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>


    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <title>Try it your self</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
              integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
              integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
              crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"
                integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
        <style>
            body {
                background: #ededed;
            }

            .table_outer {
                padding: 20px 0;
            }

            table td,
            table th {
                text-overflow: ellipsis;
                white-space: nowrap;
                overflow: hidden;
            }

            .card {
                border-radius: .5rem;
            }

            .custom_table tbody .persons {
                padding: 0;
                margin: 0;
            }

            .custom_table tbody .persons li {
                padding: 0;
                margin: 0 0 0 -15px;
                list-style: none;
                display: inline-block;
            }

            .custom_table tbody .persons li a {
                display: inline-block;
                width: 36px;
            }

            .custom_table tbody .persons li a img {
                border-radius: 50%;
                max-width: 100%;
            }


            .custom_table tbody .persons.single li a {
                margin-left: 7px;
            }

            table button.btn {
                border-radius: 50%;
                width: 30px;
                height: 30px;
                text-align: center;
                line-height: 30px;
                padding: 0px !important;
            }

            table .remove_tr {
                box-shadow: 0 0 20px 0 rgba(255, 0, 0, .5);
                border: 2px solid rgba(255, 0, 0, 1);
            }
        </style>
    </head>

    <body>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <section class="table_outer">

                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-12">
                                    <div class="card border-0 shadow">
                                        <div
                                            class="card-header with-border d-flex justify-content-start align-items-center media_card_header">

                                            <div class="container-fluid">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div>

                                                            <a href="{{ url('idea_export') }}" class="btn btn-primary">Export Data</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="card-body">

                                            <div class="table-responsive">
                                                <table class="table table-hover table-striped table-borderless custom_table">
                                                    <thead class="table-success">
                                                    <tr>
                                                        <th scope="col">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" value=""
                                                                       id="select_all" />
                                                            </div>
                                                        </th>
                                                        <th scope="col">Title
                                                        </th>
                                                        <th scope="col">Description</th>
                                                        <th scope="col">Status</th>
                                                        <th scope="col">feature Image</th>
                                                        <th scope="col">ACTION</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach ($idea as $item)
                                                        <tr class="">
                                                            <th scope="row">
                                                                <div class="form-check">
                                                                    <input class="form-check-input checkbox" type="checkbox"
                                                                           value="" id="flexCheckDefault1"
                                                                           data-id="{{ $item->id }}" value="{{ $item->id }}" />
                                                                </div>
                                                            </th>
                                                            <td>{{ $item->title }}</td>
                                                            <td>
                                                                {{ $item->description }}
                                                            </td>

                                                            <td> {{ $item->status }}</td>
                                                            <td>
                                                                <ul class="persons single">
                                                                    <li>
                                                                        <a href="#">
                                                                            <img src="https://picsum.photos/id/64/100/100"
                                                                                 alt="Person" class="img-fluid">
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </td>
                                                            <td>
                                                                <button type="button" class="btn btn-success btn-sm px-2">
                                                                    <i class="fa-solid fa-pen-to-square"></i>
                                                                </button>
                                                                <button type="button" class="btn btn-primary btn-sm px-2">
                                                                    <i class="fa-solid fa-eye"></i>
                                                                </button>
                                                                <button type="button" class="btn btn-danger btn-sm px-2">
                                                                    <i class="fa-solid fa-trash"></i>
                                                                </button>
                                                            </td>
                                                        </tr>
                                                    @endforeach


                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <script>
                        $(document).ready(function() {
                            // Select/deselect all checkboxes
                            $('#select_all').click(function() {
                                if ($(this).is(':checked')) {
                                    $('.checkbox').prop('checked', true);
                                } else {
                                    $('.checkbox').prop('checked', false);
                                }
                            });

                            // If all checkboxes are selected, select the top checkbox
                            $('.checkbox').click(function() {
                                if ($('.checkbox:checked').length === $('.checkbox').length) {
                                    $('#select_all').prop('checked', true);
                                } else {
                                    $('#select_all').prop('checked', false);
                                }
                            });
                        });
                    </script>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            // Select/deselect all checkboxes
            $('#select_all').click(function() {
                if ($(this).is(':checked')) {
                    $('.checkbox').prop('checked', true);
                } else {
                    $('.checkbox').prop('checked', false);
                }
            });

            // If all checkboxes are selected, select the top checkbox
            $('.checkbox').click(function() {
                if ($('.checkbox:checked').length === $('.checkbox').length) {
                    $('#select_all').prop('checked', true);
                } else {
                    $('#select_all').prop('checked', false);
                }
            });
        });
    </script>
    </body>
</x-app-layout>
