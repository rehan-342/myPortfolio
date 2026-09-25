@extends('layouts.adminlayout')

@section('pageContent')

@if(session('success'))    

<div style="background-color: green; color:white;">
    {{ session('success') }}
</div>
@endif

<div class="add-project">

    <!-- Page Header -->
    <div class="page-header">
        <div>
            <h1>Add New Project</h1>
            <p>Add a new project to your portfolio.</p>
        </div>
    </div>


    <!-- Project Form -->
    <div class="form-card">

       
<form action="/uploadproject" method="POST" enctype="multipart/form-data">

    @csrf

    <!-- Project Name -->
    <div class="form-group">
        <label for="project_name">Project Name</label>

        <input
            type="text"
            id="project_name"
            name="name"
            placeholder="Enter project name"
            required
        >
    </div>

    <!-- Project Description -->
    <div class="form-group">
        <label for="description">Description</label>

        <textarea
            id="description"
            name="description"
            rows="6"
            placeholder="Write project description..."
            required
        ></textarea>
    </div>

    <!-- Technologies -->
    <div class="form-group">
        <label for="technologies">Technologies</label>

        <input
            type="text"
            id="technologies"
            name="technologies"
            placeholder="Laravel, PHP, MySQL, JavaScript"
            required
        >

        <small>
            Separate technologies with commas.
        </small>
    </div>

    <!-- Project Image -->
    <div class="form-group">
        <label for="project_image">Project Image</label>

        <input
            type="file"
            id="project_image"
            name="image"
            accept="image/*"
        >
    </div>

    <!-- GitHub -->
    <div class="form-group">
        <label for="github">GitHub URL</label>

        <input
            type="url"
            id="github"
            name="gitlink"
            placeholder="https://github.com/username/project"
        >
    </div>

    <!-- Live Demo -->
    <div class="form-group">
        <label for="live_url">Live Demo URL</label>

        <input
            type="url"
            id="live_url"
            name="url"
            placeholder="https://example.com"
        >
    </div>

    <!-- Buttons -->
    <div class="form-buttons">

        <button type="reset" class="cancel-btn">
            Cancel
        </button>

        <button type="submit" class="save-btn">
            <i class="fa-solid fa-plus"></i>
            Add Project
        </button>

    </div>

</form>


    </div>

</div>






<style>

/* Page */

.add-project {
    width: 100%;
}


/* Header */

.page-header {
    margin-bottom: 25px;
}

.page-header h1 {
    margin: 0;
    font-size: 30px;
}

.page-header p {
    margin-top: 7px;
    color: #777;
}


/* Form Card */

.form-card {
    background: white;
    padding: 30px;
    border-radius: 15px;

    max-width: 900px;

    box-shadow: 0 5px 20px rgba(0, 0, 0, 0.06);
}


/* Form Group */

.form-group {
    margin-bottom: 22px;
}

.form-group label {
    display: block;

    margin-bottom: 8px;

    font-weight: 600;
    font-size: 14px;
}


/* Inputs */

.form-group input,
.form-group textarea {
    width: 100%;

    padding: 13px 14px;

    border: 1px solid #ddd;
    border-radius: 8px;

    font-size: 14px;

    outline: none;

    box-sizing: border-box;

    transition: 0.2s;
}


.form-group input:focus,
.form-group textarea:focus {
    border-color: #111;
}


.form-group textarea {
    resize: vertical;
}


/* Small Text */

.form-group small {
    display: block;

    margin-top: 6px;

    color: #888;

    font-size: 12px;
}


/* File Input */

.form-group input[type="file"] {
    padding: 10px;
    background: #fafafa;
}


/* Buttons */

.form-buttons {
    display: flex;

    justify-content: flex-end;

    gap: 12px;

    margin-top: 30px;
}


/* Cancel */

.cancel-btn {
    padding: 12px 20px;

    border: 1px solid #ddd;

    border-radius: 8px;

    text-decoration: none;

    color: #333;

    background: white;

    font-size: 14px;
}


/* Save */

.save-btn {
    padding: 12px 20px;

    border: none;

    border-radius: 8px;

    background: #111;

    color: white;

    font-size: 14px;

    cursor: pointer;
}


.save-btn:hover {
    opacity: 0.85;
}


/* Mobile */

@media (max-width: 600px) {

    .form-card {
        padding: 20px;
    }

    .page-header h1 {
        font-size: 24px;
    }

    .form-buttons {
        flex-direction: column;
    }

    .cancel-btn,
    .save-btn {
        text-align: center;
        width: 100%;
        box-sizing: border-box;
    }

}

</style>

@endsection



