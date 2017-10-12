<html>
<head>
    <title>Dasboard</title>
    <link rel="stylesheet" type="text/css" href="../css/adminstyle.css"/>
    <script type= "text/javascript" src= "../ckeditor/ckeditor.js"></script>

    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet">
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script>

    <link href="../summernote/dist/summernote.css" rel="stylesheet">
    <script src="../summernote/dist/summernote.min.js"></script>

    <!-- include summernote-ko-KR -->
    <script src="../summernote/lang/summernote-ko-KR.js"></script>


    <script src="../js/validation.js" type="text/javascript"></script>
    <script type= "text/javascript">
        function confirmDelete()
        {
            return confirm("Do you sure want to Delete this data?");
        }
    </script>
</head>
<body>

<div id= "wrapper">
    <div id="header">
        <h1> Admin Panel Dashboard</h1>
    </div>
    <div id= "container">
        <div id= "sidebar">
            <h2>Page Options</h2>
            <ul>

                <li><a href= "index.php">Home</a></li>
                <li><a href= "">Change Footer Text</a></li>
                <li><a href= "">Change Password</a></li>
                <li><a href= "../logout.php">Logout</a></li>
                <li><a href= "../index.php">question page</a></li>
            </ul>
            <h2>Admin options</h2>
            <ul>
                <li><a href= "../ask_question.php">Add question</a></li>
                <li><a href= "view_users.php">View users</a></li>
                <li><a href= "question_view.php">View question</a></li>

            </ul>


        </div>
        <div id= "content">