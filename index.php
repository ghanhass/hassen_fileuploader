<!DOCTYPE html>  
<html>
<head>
<meta charset='utf-8'>
<meta name="viewport" content="width=device-width,initial-scale=1">
<link href="hassen_fileuploader.css" rel="stylesheet">

<!-- styles of stories-->
<style>
.myFilesList{float:left;}
.myContainerClass{float:left;margin-right:10px;}
</style>
</head>
<body>	
<input id='myFileinput' type="file" name='myFileinput' multiple="multiple" >
<div id='filesList'>
</div>
<script src="hassen_fileuploader.js">
</script>
<script>
hfu({
'hfuFileinputPrototype' : "#myFileinput",

"hfuFilesList" : "#filesList",
"hfuFilesListClass" : "myFilesList",

"hfuContainerDivClass" : "myContainerClass",
"hfuDropHereClass" : "myDropHereClass",
"lang" : "en",
});
</script>
</body>
</html>
