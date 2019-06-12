<!DOCTYPE html>
<html>
<head>
	<title>SVP</title>
	<link rel="stylesheet" type="text/css" href="../app/Views/admin/adminUtils/style.css">
</head>
<body>
	<h1>Admin page</h1>
<div align="center" class="btn">
	<button class="button" onclick="announcement()">Add announcement</button>
</div>
<div align="center" class="btn">
	<button class="button" onclick="FAQ()">Add FAQ</button>
</div>
<div align="center">
    <button type="button" id="submitButton" style="display: none;" onclick="submitForm()">Submit</button>
<form id="form">

</form>
</div>

<script>
    var formType = '';

    function submitForm () {
        if ( formType == 'faq' ) {
            var firstTextBox = document.getElementById( 'faqTextBoxOne' ).value;
            var secondTextBox = document.getElementById( 'faqTextBoxTwo' ).value;
            if(firstTextBox.length == 0 || secondTextBox.length == 0) {
                alert('Complete both fields!');
                return;
            }
            ajaxSubmit( formType, firstTextBox, secondTextBox );
        }
        else {
            var firstTextBox = document.getElementById( 'announcementTextBoxOne' ).value;
            var secondTextBox = document.getElementById( 'announcementTextBoxTwo' ).value;
            if ( firstTextBox.length == 0 || secondTextBox.length == 0 ) {
                alert( 'Complete both fields!' );
                return;
            }
            ajaxSubmit( formType, firstTextBox, secondTextBox );
        }
    }

    function ajaxSubmit ( type, contentOne, contentTwo ) {
        var http = new XMLHttpRequest();
        if ( type == 'faq' ) {
            var url = 'http://localhost:8001/admin/menu/addFaq';
            var params = 'question=' + contentOne + '&answer=' + contentTwo;
        }
        else {
            var url = 'http://localhost:8001/admin/menu/addAnnouncement';
            var params = 'title=' + contentOne + '&content=' + contentTwo;
        }
        http.open( 'POST', url, true );

        http.setRequestHeader( 'Content-type', 'application/x-www-form-urlencoded' );

        http.onreadystatechange = function() {//Call a function when the state changes.
            if ( http.readyState == 4 && http.status == 200 ) {
                var message = JSON.parse( http.responseText );
                alert( message.message );
            }
        };
        http.send( params );
    }

    function announcement () {
        formType = 'announcement';
        document.getElementById( 'form' ).innerHTML = '';
        var title = document.createElement( "INPUT" );
        title.setAttribute( "type", "text" );
        title.setAttribute( "placeholder", "Title.." );
        title.setAttribute( "class", "titlecls" );
        title.setAttribute( "id", "announcementTextBoxOne" );
        title.setAttribute( "name", "title" );
        document.getElementById( "form" ).appendChild( title );
        var content = document.createElement( "TEXTAREA" );
        content.setAttribute( "type", "text" );
        content.setAttribute( "placeholder", "Content.." );
        content.setAttribute( "class", "contentcls" );
        content.setAttribute( "id", "announcementTextBoxTwo" );
        content.setAttribute( "name", "content" );
        document.getElementById( "form" ).appendChild( content );
        document.getElementById( "submitButton" ).setAttribute( 'style', 'display = block' );

    }

    function FAQ () {
        formType = 'faq';
        document.getElementById( 'form' ).innerHTML = '';
        var title = document.createElement( "INPUT" );
        title.setAttribute( "type", "text" );
        title.setAttribute( "placeholder", "QUESTION" );
        title.setAttribute( "class", "titlecls" );
        title.setAttribute( "id", "faqTextBoxOne" );
        title.setAttribute( "name", "title" );
        document.getElementById( "form" ).appendChild( title );
        var content = document.createElement( "TEXTAREA" );
        content.setAttribute( "type", "text" );
        content.setAttribute( "placeholder", "ANSWER" );
        content.setAttribute( "class", "contentcls" );
        content.setAttribute( "id", "faqTextBoxTwo" );
        content.setAttribute( "name", "content" );
        document.getElementById( "form" ).appendChild( content );
        document.getElementById( "submitButton" ).setAttribute( 'style', 'display = block' );

    }
</script>

</body>
</html>
