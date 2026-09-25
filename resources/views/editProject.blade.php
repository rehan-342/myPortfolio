<style>



    body{
        background-color: black;
    }
.project-form {
    max-width: 600px;
    margin: 40px auto;
    padding: 32px;
    background: #ffffff;
    border-radius: 12px;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
    font-family: 'Segoe UI', Roboto, Arial, sans-serif;
}

.form-group {
    margin-bottom: 20px;
}

.form-label {
    display: block;
    margin-bottom: 6px;
    font-weight: 600;
    font-size: 14px;
    color: #333;
}

.form-control {
    width: 100%;
    padding: 10px 14px;
    border: 1px solid #d1d5db;
    border-radius: 8px;
    font-size: 14px;
    color: #111827;
    box-sizing: border-box;
    transition: border-color 0.2s, box-shadow 0.2s;
}

.form-control:focus {
    outline: none;
    border-color: #4f46e5;
    box-shadow: 0 0 0 3px rgba(79, 70, 229, 0.15);
}

.form-textarea {
    min-height: 100px;
    resize: vertical;
}

.form-file {
    padding: 8px 0;
    border: none;
}

.current-image-wrapper {
    margin-top: 6px;
}

.current-image-preview {
    border-radius: 8px;
    border: 1px solid #e5e7eb;
    padding: 4px;
}

.btn {
    display: inline-block;
    padding: 10px 24px;
    border: none;
    border-radius: 8px;
    font-size: 14px;
    font-weight: 600;
    cursor: pointer;
    transition: background-color 0.2s;
}

.btn-primary {
    background-color: #4f46e5;
    color: #fff;
}

.btn-primary:hover {
    background-color: #4338ca;
}



</style>



<form action="/updateproject/{{ $project->id }}" 
      method="POST" 
      enctype="multipart/form-data"
      id="project-update-form"
      class="project-form">

    @csrf
    @method('PUT')

    <div class="form-group">
        <label for="name" class="form-label">Project Name</label>
        <input type="text" 
               id="name"
               name="name" 
               class="form-control"
               value="{{ $project->name }}">
    </div>

    <div class="form-group">
        <label for="description" class="form-label">Description</label>
        <textarea id="description"
                  name="description" 
                  class="form-control form-textarea">{{ $project->description }}</textarea>
    </div>

    <div class="form-group">
        <label for="technologies" class="form-label">Technologies</label>
        <input type="text" 
               id="technologies"
               name="technologies" 
               class="form-control"
               value="{{ $project->technologies }}">
    </div>

    <div class="form-group">
        <label class="form-label">Current Image</label>
        <div class="current-image-wrapper">
            <img src="{{ asset('projectimages/' . $project->image) }}"
                 class="current-image-preview"
                 width="100">
        </div>
    </div>

    <div class="form-group">
        <label for="image" class="form-label">Change Image</label>
        <input type="file" 
               id="image"
               name="image"
               class="form-control form-file">
    </div>

    <div class="form-group">
        <label for="gitlink" class="form-label">GitHub Link</label>
        <input type="text" 
               id="gitlink"
               name="gitlink" 
               class="form-control"
               value="{{ $project->gitlink }}">
    </div>

    <div class="form-group">
        <label for="url" class="form-label">Project URL</label>
        <input type="text" 
               id="url"
               name="url" 
               class="form-control"
               value="{{ $project->url }}">
    </div>

    <button type="submit" id="update-btn" class="btn btn-primary">
        Update Project
    </button>

</form>