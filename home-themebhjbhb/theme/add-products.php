<!DOCTYPE html>
<html lang="en">
<head>
<title>Add Product : Home Decorz Admin</title>
<?php include("inc/topscript.php"); ?>
</head>
<body>
<?php include("inc/topnav.php"); ?>
<?php include("inc/sidebar.php"); ?>

<div id="content">
<div id="content-header">
 <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">Add Products</a> </div>
 <h1>Add Products</h1>
</div>
<div class="container-fluid">
 <hr>
 <div class="row-fluid">
 <div class="span12">
 <div class="widget-box">
 <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
 <h5>Product Info</h5>
 </div>
 <div class="widget-content nopadding">
 
<form action="#" method="get" class="form-horizontal">

<div class="control-group">
<label class="control-label" style="text-align:left; padding-left:10px; font-size:12px;">Product Name</label>
<div class="controls">
<input type="text" class="span11" placeholder="Product Name" />
</div>
</div>
 <div class="control-group">
<label class="control-label" style="text-align:left; padding-left:10px; font-size:12px;">Categories Name</label>
<div class="controls">
<select >
<option>First option</option>
<option>Second option</option>
<option>Third option</option>
<option>Fourth option</option>
<option>Fifth option</option>
</select>
</div>
</div>


<div class="control-group">
<label class="control-label" style="text-align:left; padding-left:10px; font-size:12px;">Sub Categories Name</label>
<div class="controls">
<select >
<option>First option</option>
<option>Second option</option>
<option>Third option</option>
<option>Fourth option</option>
<option>Fifth option</option>
</select>
</div>
</div>
 
<div class="control-group">
<label class="control-label" style="text-align:left; padding-left:10px; font-size:12px;">Product Title</label>
<div class="controls">
<input type="text" class="span11" placeholder="Product Title (Max. Char 70)" />
</div>
</div>

<div class="control-group">
<label class="control-label" style="text-align:left; padding-left:10px; font-size:12px;">Product Keyword</label>
<div class="controls">
<input type="text" class="span11" placeholder="Product Keyword (Max. Char 170)" />
</div>
</div>


<div class="control-group">
<label class="control-label" style="text-align:left; padding-left:10px; font-size:12px;">Product Description</label>
<div class="controls">
<textarea class="span11" placeholder="Product Description (Max. Char 156)"></textarea>
</div>
</div>
<div class="control-group">
<label class="control-label" style="text-align:left; padding-left:10px; font-size:12px;">Produt Images</label>
 <div class="controls">
 <input type="file" />
 </div>
 </div>

<div class="form-actions">
<button type="submit" class="btn btn-success">Add Product</button>
</div>
</form>
</div>
</div>
</div>
</div>
<hr>


<div class="row-fluid">
<div class="span12">
<div class="widget-box">
<div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
<h5>All Products</h5>
</div>
<div class="widget-content nopadding">
<table class="table table-bordered table-striped">
<thead>
<tr>
<th style="width:25%; text-align:left;">Product Name</th>
<th style="width:25%; text-align:left;">Categories Name</th>
<th style="width:25%; text-align:left;">Sub Categories Name</th>
<th style="width:25%; text-align:left;">Tools</th>
</tr>
</thead>
<tbody>
<tr class="odd gradeX">
<td>Furniture</td>
<td>Internet Explorer 4.0</td>
<td>Win 95+</td>
<td><i class="fa fa-plus-circle fa-2x" style="color:#51A351;"></i>&nbsp;<i class="fa fa-pencil-square fa-2x" style="color:#27A9E3;"></i> &nbsp;<i class="fa fa-trash fa-2x" style="color:#990000;"></i></td>
</tr>
<tr class="even gradeC">
<td>Furniture</td>
<td>Internet Explorer 4.0</td>
<td>Win 95+</td>
<td><i class="fa fa-plus-circle fa-2x" style="color:#51A351;"></i>&nbsp;<i class="fa fa-pencil-square fa-2x" style="color:#27A9E3;"></i> &nbsp;<i class="fa fa-trash fa-2x" style="color:#990000;"></i></td>
</tr>
</tbody>
</table>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<?php include("inc/footer.php"); ?> 
<?php include("inc/fscript.php"); ?> 
</body>
</html>
