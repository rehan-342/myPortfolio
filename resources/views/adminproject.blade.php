@extends('layouts.adminlayout')

@section('pageContent')

    <div class="projects-page">

        <!-- Header -->
        <div class="page-header">
            <div>
                <h1>Projects</h1>
                <p>Manage your portfolio projects.</p>
            </div>

            <a href="{{ route('addproject') }}" class="add-btn">
                <i class="fa-solid fa-plus"></i>
                Add Project
            </a>
        </div>


        <!-- Projects Grid -->
        <div class="projects-grid">

            <!-- Project 1 -->
            <div class="project-card">

                <div class="project-image">
                    <img src="{{ asset('images/project1.jpg') }}" alt="Portfolio Website">
                </div>

                <div class="project-content">

                    <h2>Portfolio Website</h2>

                    <p class="description">
                        A responsive personal portfolio website built
                        using Laravel, HTML, CSS and JavaScript.
                    </p>

                    <div class="technologies">
                        <span>Laravel</span>
                        <span>PHP</span>
                        <span>MySQL</span>
                        <span>JavaScript</span>
                    </div>

                    <div class="project-actions">

                        <a href="#" class="edit-btn">
                            <i class="fa-solid fa-pen"></i>
                            Edit
                        </a>

                        <form action="#" method="POST">
                            @csrf
                            @method('DELETE')

                            <button type="submit" class="delete-btn">
                                <i class="fa-solid fa-trash"></i>
                                Delete
                            </button>
                        </form>

                    </div>

                </div>

            </div>


            <!-- Project 2 -->
            <div class="project-card">

                <div class="project-image">
                    <img src="{{ asset('images/project2.jpg') }}" alt="User Management System">
                </div>

                <div class="project-content">

                    <h2>User Management System</h2>

                    <p class="description">
                        PHP based user management system with login,
                        registration and MySQL database.
                    </p>

                    <div class="technologies">
                        <span>PHP</span>
                        <span>MySQL</span>
                        <span>HTML</span>
                        <span>CSS</span>
                    </div>

                    <div class="project-actions">

                        <a href="#" class="edit-btn">
                            <i class="fa-solid fa-pen"></i>
                            Edit
                        </a>

                        <form action="#" method="POST">
                            @csrf
                            @method('DELETE')

                            <button type="submit" class="delete-btn">
                                <i class="fa-solid fa-trash"></i>
                                Delete
                            </button>
                        </form>

                    </div>

                </div>

            </div>


            <!-- Project 3 -->
            <div class="project-card">

                <div class="project-image">
                    <img src="{{ asset('images/project3.jpg') }}" alt="Music Player">
                </div>

                <div class="project-content">

                    <h2>Music Player</h2>

                    <p class="description">
                        Spotify inspired music player created using
                        HTML, CSS and JavaScript.
                    </p>

                    <div class="technologies">
                        <span>HTML</span>
                        <span>CSS</span>
                        <span>JavaScript</span>
                    </div>

                    <div class="project-actions">

                        <a href="#" class="edit-btn">
                            <i class="fa-solid fa-pen"></i>
                            Edit
                        </a>

                        <form action="#" method="POST">
                            @csrf
                            @method('DELETE')

                            <button type="submit" class="delete-btn">
                                <i class="fa-solid fa-trash"></i>
                                Delete
                            </button>
                        </form>

                    </div>

                </div>

            </div>




            @foreach ($projects as $project)





                <div class="project-card">

                    <div class="project-image">
                        <img src="{{ asset('projectimages/' . $project->image) }}" alt="{{ $project->name }}">
                    </div>

                    <div class="project-content">

                        <h2>{{ $project->name }}</h2>

                        <p class="description">
                            {{ $project->description }}
                        </p>

                        @foreach(explode(',', $project->technologies) as $technology)
                            <span>{{ trim($technology) }}</span>
                        @endforeach

                        <div class="project-actions">
                            <a href="/editProject/{{ $project->id }}" class="edit-btn">
                                <i class="fa-solid fa-pen-to-square"></i>Edit
                            </a>

                            <form action="/deleteProject/{{ $project->id }}" method="POST">
                                @csrf
                                @method('DELETE')

                                <button type="submit" class="delete-btn"
                                    onclick="return confirm('Are you sure you want to delete this project?')">
                                    <i class="fa-solid delete-btn fa-trash"></i>Delete
                                </button>
                            </form>

                        </div>

                    </div>

                </div>










            @endforeach

        </div>

    </div>


    <style>
        /* Page */

        .projects-page {
            width: 100%;
        }


        /* Header */

        .page-header {
            display: flex;
            justify-content: space-between;
            align-items: center;

            margin-bottom: 30px;
        }

        .page-header h1 {
            margin: 0;
            font-size: 30px;
        }

        .page-header p {
            margin: 7px 0 0;
            color: #777;
        }


        /* Add Button */

        .add-btn {
            display: flex;
            align-items: center;
            gap: 8px;

            padding: 12px 18px;

            background: #111;
            color: white;

            text-decoration: none;

            border-radius: 8px;

            font-size: 14px;
        }


        /* Projects Grid */

        .projects-grid {
            display: grid;

            grid-template-columns: repeat(3, 1fr);

            gap: 25px;
        }


        /* Project Card */

        .project-card {
            background: white;

            border-radius: 15px;

            overflow: hidden;

            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.06);

            transition: 0.2s;
        }

        .project-card:hover {
            transform: translateY(-3px);
        }


        /* Image */

        .project-image {
            width: 100%;
            height: 190px;

            overflow: hidden;

            background: #eee;
        }

        .project-image img {
            width: 100%;
            height: 100%;

            object-fit: cover;
        }


        /* Content */

        .project-content {
            padding: 20px;
        }

        .project-content h2 {
            margin: 0 0 10px;

            font-size: 20px;
        }


        /* Description */

        .description {
            color: #777;

            font-size: 14px;

            line-height: 1.6;

            margin-bottom: 15px;
        }


        /* Technologies */

        .technologies {
            display: flex;

            flex-wrap: wrap;

            gap: 7px;

            margin-bottom: 20px;
        }

        .technologies span {
            background: #f1f1f1;

            padding: 5px 9px;

            border-radius: 5px;

            font-size: 12px;
        }


        /* Actions */

        .project-actions {
            display: flex;

            gap: 10px;
        }

        .project-actions a,
        .project-actions button {
            display: flex;

            align-items: center;

            justify-content: center;

            gap: 7px;

            padding: 9px 13px;

            border-radius: 7px;

            font-size: 13px;

            cursor: pointer;
        }


        /* Edit */

        .edit-btn {
            background: #f1f1f1;

            color: #222;

            text-decoration: none;
        }


        /* Delete */

        .project-actions form {
            margin: 0;
        }

        .delete-btn {
            background: #111;

            color: white;

            border: none;
        }


        /* Tablet */

        @media (max-width: 1000px) {

            .projects-grid {
                grid-template-columns: repeat(2, 1fr);
            }

        }


        /* Mobile */

        @media (max-width: 600px) {

            .page-header {
                align-items: flex-start;

                flex-direction: column;

                gap: 15px;
            }

            .projects-grid {
                grid-template-columns: 1fr;
            }

            .add-btn {
                width: 100%;

                justify-content: center;

                box-sizing: border-box;
            }

        }
    </style>

@endsection