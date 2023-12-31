<div class="modal" id="myModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Faculty</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('facultyfetch') }}" method="POST">
                    @csrf

                    <div class="form-group">
                        <label for="inputIdNo">ID no</label>
                        <input type="text" name="id_no" class="form-control" id="inputIdNo"
                            placeholder="Enter ID no">
                    </div>
                    <div class="form-group">
                        <label for="inputName">Name</label>
                        <input type="text" name="faculty_name" class="form-control" id="inputName"
                            placeholder="Enter Name">
                    </div>
                    <div class="form-group">
                        <label for="inputCourse">Course</label>
                        <input type="text" name="faculty_course" class="form-control" id="inputCourse"
                            placeholder="Enter Course">
                    </div>
                    <div class="form-group">
                        <label for="inputEmail">Email</label>
                        <input type="email" name="faculty_email" class="form-control" id="inputEmail"
                            placeholder="Enter Email">
                    </div>
                    {{-- <div class="form-group">
                    <label for="inputAction">Action</label>
                    <input type="text" name="" class="form-control" id="inputAction" placeholder="Enter Action">
                </div> --}}
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save Changes</button>
            </div>
            </form>
        </div>
    </div>
</div>
