<!DOCTYPE html>
<html>
<head>
<title>contenido de un div a un textarea</title>
<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
</head>

<body>
<form method="post" action="youraction.php">
<label>Paste your HTML in the box below</label>
<textarea name="content" style='display:none' id='foo'></textarea>
<div id='htmlsource' contenteditable style='border:solid 1px black;padding:1em;width:100%;min-height:2em;' ></div>
<input type='submit' />
</form>

<script>
jQuery(function(){
    jQuery('form').submit( function(e) {
        jQuery('textarea').val( jQuery('#htmlsource').html() );
      });
});
</script>
</body>

</html> 