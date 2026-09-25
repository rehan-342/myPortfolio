@extends('layouts.adminlayout')

@section('pageContent')

<div class="enquiries-page">

    <!-- Page Header -->
    <div class="page-header">
        <div>
            <h1>Enquiries</h1>
            <p>View messages received from your portfolio website.</p>
        </div>

        <div class="enquiry-count">
            <i class="fa-solid fa-envelope"></i>
            <span>{{ $messages->count() }} Enquiries</span>
        </div>
    </div>



    <!-- Enquiries Card -->
    <div class="enquiries-card">

        <div class="card-header">
            <h2>All Enquiries</h2>

            <div class="search-box">
                <i class="fa-solid fa-search"></i>
                <input
                    type="text"
                    id="searchEnquiry"
                    placeholder="Search enquiries..."
                >
            </div>
        </div>


        <!-- Table -->
        <div class="table-container">

            <table id="enquiriesTable">

                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>email</th>
                      
                        <th>Subject</th>
                        <th>Message</th>
                       
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>

                    <!-- Enquiry 1 -->
                    


                    <!-- Enquiry 2 -->
                    




@foreach($messages as $message)
                    <tr>
                        <td>{{ $message->id }}</td>

                        <td>
                            <div class="user-info">
                                <div class="avatar">{{ $message->name[0] }}</div>
                                <span>{{ $message->name }}</span>
                            </div>
                        </td>


                        <td>{{ $message->email }}</td>

                        
                        <td>{{ $message->subject }}</td>

                        <td class="message">
                           {{ $message->message }}
                        </td>


                        <td>
                            <!-- <button class="view-btn">
                                    
                        
                            <i class="fa-solid fa-eye"></i>
                            </button> -->






    <form action="/deleteEnquiry/{{ $message->id }}" method="POST">
            @csrf
            @method('DELETE')

            <button class="delete-btn">
                     <i class="fa-solid fa-trash"></i>
               
            </button>
        </form>
    </td>

                        
                    </tr>













@endforeach




<!-- View Enquiry Modal -->
<!-- 
<div class="modal" id="enquiryModal">

    <div class="modal-box">

        <div class="modal-header">
            <h2>Enquiry Details</h2>

            <button onclick="closeModal()">
                <i class="fa-solid fa-xmark"></i>
            </button>
        </div>


        <div class="modal-content">

            <p>
                <strong>Name:</strong>
                <span id="modalName"></span>
            </p>

            <p>
                <strong>Email:</strong>
                <span id="modalEmail"></span>
            </p>

            <p>
                <strong>Subject:</strong>
                <span id="modalSubject"></span>
            </p>

            <div class="message-box">
                <strong>Message</strong>

                <p id="modalMessage"></p>
            </div>

        </div>

    </div> 

</div> 
 -->

<style>

/* Page */

.enquiries-page {
    width: 100%;
}


/* Header */

.page-header {
    display: flex;
    justify-content: space-between;
    align-items: center;

    margin-bottom: 25px;
}

.page-header h1 {
    margin: 0;
    font-size: 30px;
}

.page-header p {
    margin: 7px 0 0;
    color: #777;
}


/* Count */

.enquiry-count {
    display: flex;
    align-items: center;
    gap: 8px;

    background: #111;
    color: white;

    padding: 11px 16px;

    border-radius: 8px;

    font-size: 14px;
}


/* Card */

.enquiries-card {
    background: white;

    border-radius: 15px;

    padding: 25px;

    box-shadow: 0 5px 20px rgba(0,0,0,0.06);
}


/* Card Header */

.card-header {
    display: flex;
    justify-content: space-between;
    align-items: center;

    margin-bottom: 20px;
}

.card-header h2 {
    margin: 0;

    font-size: 20px;
}


/* Search */

.search-box {
    position: relative;
}

.search-box i {
    position: absolute;

    left: 12px;
    top: 50%;

    transform: translateY(-50%);

    color: #888;
}

.search-box input {
    width: 220px;

    padding: 10px 12px 10px 35px;

    border: 1px solid #ddd;

    border-radius: 8px;

    outline: none;
}

.search-box input:focus {
    border-color: #111;
}


/* Table */

.table-container {
    width: 100%;

    overflow-x: auto;
}

table {
    width: 100%;

    border-collapse: collapse;

    min-width: 900px;
}


thead {
    background: #f7f7f7;
}

th {
    text-align: left;

    padding: 14px;

    font-size: 13px;

    color: #555;
}

td {
    padding: 16px 14px;

    border-bottom: 1px solid #eee;

    font-size: 13px;

    color: #444;
}


/* User */

.user-info {
    display: flex;

    align-items: center;

    gap: 10px;

    font-weight: 600;
}

.avatar {
    width: 34px;
    height: 34px;

    border-radius: 50%;

    background: #111;
    color: white;

    display: flex;

    justify-content: center;
    align-items: center;

    font-size: 13px;
}


/* Message */

.message {
    max-width: 250px;

    white-space: nowrap;

    overflow: hidden;

    text-overflow: ellipsis;
}


/* Buttons */

.view-btn,
.delete-btn {
    width: 35px;
    height: 35px;

    border: none;

    border-radius: 7px;

    cursor: pointer;

    margin-right: 5px;
}

.view-btn {
    background: #eee;

    color: #222;
}

.delete-btn {
    background: #111;

    color: white;
}


/* Modal */

.modal {
    position: fixed;

    inset: 0;

    background: rgba(0,0,0,0.55);

    display: none;

    align-items: center;
    justify-content: center;

    z-index: 999;
}

.modal.show {
    display: flex;
}

.modal-box {
    width: 500px;
    max-width: 90%;

    background: white;

    border-radius: 15px;

    padding: 25px;
}


/* Modal Header */

.modal-header {
    display: flex;

    justify-content: space-between;

    align-items: center;

    border-bottom: 1px solid #eee;

    padding-bottom: 15px;

    margin-bottom: 20px;
}

.modal-header h2 {
    margin: 0;
}

.modal-header button {
    border: none;

    background: none;

    font-size: 20px;

    cursor: pointer;
}


/* Modal Content */

.modal-content p {
    margin: 12px 0;
}

.modal-content strong {
    margin-right: 5px;
}


/* Message Box */

.message-box {
    margin-top: 20px;

    padding: 15px;

    background: #f7f7f7;

    border-radius: 10px;
}

.message-box p {
    color: #555;

    line-height: 1.6;
}


/* Mobile */

@media (max-width: 600px) {

    .page-header {
        flex-direction: column;

        align-items: flex-start;

        gap: 15px;
    }

    .card-header {
        flex-direction: column;

        align-items: flex-start;

        gap: 15px;
    }

    .search-box,
    .search-box input {
        width: 100%;

        box-sizing: border-box;
    }

}

</style>


<script>

/* Search */

const searchInput = document.getElementById("searchEnquiry");

searchInput.addEventListener("keyup", function () {

    const searchValue = this.value.toLowerCase();

    const rows = document.querySelectorAll("#enquiriesTable tbody tr");

    rows.forEach(function (row) {

        const text = row.innerText.toLowerCase();

        if (text.includes(searchValue)) {
            row.style.display = "";
        } else {
            row.style.display = "none";
        }

    });

});


/* View Enquiry */

function viewEnquiry(name, email, subject, message) {

    document.getElementById("modalName").textContent = name;

    document.getElementById("modalEmail").textContent = email;

    document.getElementById("modalSubject").textContent = subject;

    document.getElementById("modalMessage").textContent = message;

    document.getElementById("enquiryModal").classList.add("show");
}


/* Close Modal */

function closeModal() {

    document
        .getElementById("enquiryModal")
        .classList.remove("show");

}


/* Delete */

function deleteEnquiry(button) {

    if (confirm("Are you sure you want to delete this enquiry?")) {

        button.closest("tr").remove();

    }

}


/* Close modal when clicking outside */

document.getElementById("enquiryModal").addEventListener("click", function(e) {

    if (e.target === this) {
        closeModal();
    }

});

</script>

@endsection