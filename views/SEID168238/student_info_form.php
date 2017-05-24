<!doctype html>
<html lang="en">
<body>
<div class="container">

    <div>
        <h1 align="center">Student Info</h1>

        <form action="store.php" method="post">


            <div class="form-group">
                <label for="Name">Name</label>
                <input type="text" class="form-control" id="name" name="Name" placeholder="Enter Your Name here">
            </div>

            <div class="form-group">
                <label for="studentID">StudentID</label>
                <input type="text" class="form-control" id="studentID" name="StudentID" placeholder="Enter Your StudentID here">
            </div>



            <h1 align="center">MARKS OBTAINED</h1>
            <div class="form-group">
                <label for="bangla">Bangla</label>
                <input type="text" class="form-control" id="bangla" name="Bangla" placeholder="Enter Marks">
            </div>

            <div class="form-group">
                <label for="english">English</label>
                <input type="text" class="form-control" id="english" name="English" placeholder="Enter Marks">
            </div>

            <div class="form-group">
                <label for="math">Math</label>
                <input type="text" class="form-control" id="math" name="Math" placeholder="Enter Marks">
            </div>

            <div class="form-group">
                <label for="ict">ICT</label>
                <input type="text" class="form-control" id="ict" name="ICT" placeholder="Enter Marks">
            </div>

            <button type="submit" class="btn btn-default">Submit</button>

        </form>
    </div>

</div>
</body>
</html>