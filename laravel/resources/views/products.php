<script src="dhtmlx/codebase/dhtmlx.js" 	type="text/javascript" charset="utf-8"></script>
<link rel="stylesheet" href="dhtmlx/codebase/dhtmlx.css" type="text/css" media="screen" title="no title" charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style type="text/css" media="screen">
    html, body{
        margin: 0px;
        padding: 0px;
        height: 100%;
        overflow: hidden;
    }
</style>

<div id="grid_here" style="width: 1200px; height: 800px;"></div>
<br>
<input type="button" value='Add new row' onclick='add_row()'>
<input type="button" value='Delete selected' onclick='mygrid.deleteSelectedRows()'>

<script type="text/javascript" charset="utf-8">
    function add_row(){
        var id = mygrid.uid();
        mygrid.addRow(id, ["ProductName", "SupplierID", "CategoryID", "Unit", "Price", "Quantity"]);
        mygrid.selectRowById(id);
    }
    mygrid = new dhtmlXGridObject('grid_here');
    mygrid.setImagePath("./dhtmlx/grid/imgs/");
    mygrid.setHeader("ProductName, SupplierID, CategoryID, Unit, Price, Quantity");
    mygrid.setInitWidths("*,150,150,*,150,150");
    mygrid.setColTypes("ed,ed,ed,ed,ed,ed");
    mygrid.setSkin("dhx_skyblue");
    mygrid.init();
    console.log(mygrid);
    mygrid.loadXML("./product_data");

    var dp = new dataProcessor("./product_data");
    dp.attachEvent("onAfterUpdate", function(sid, action, tid, xml){
        if (action == "error"){
            mygrid.setCellTextStyle(sid, 2, "background:#eeaaaa");
            dhtmlx.message(xml.getAttribute("details"));
        }
    });
    dp.init(mygrid);
</script>