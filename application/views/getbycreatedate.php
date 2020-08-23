<html>
<head>
    <link rel="stylesheet" href="/css/getbycreatedate.css">
    <link rel="stylesheet" href="/assets/jquery-ui-1.12.css">
    <script src="/assets/jquery-1.12.js"></script>
    <script src="/assets/jquery-ui-1.12.js"></script>
</head>
<body>
    <span>Filter Tanggal 1</span><input type="text" id="date1" value="<?php echo $date1;?>">
    <span>Filter Tanggal 2</span><input type="text" id="date2" value="<?php echo $date2;?>">
    <button id="btnFilter">Filter</button>
    Total: <?php echo $objslength;?>
    <table>
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>NO. FB</th>
            <th>TGL PEMBUATAN</th>
        </tr>
    </thead>
    <tbody>
        <?php $c = 1;?>
        <?php foreach($objs as $obj){?>
        <tr>
            <td><?php echo $c++;?></td>
            <td><?php echo $obj->name;?></td>
            <td><?php echo $obj->nofb;?></td>
            <td><?php echo $obj->createdate;?></td>
        </tr>
        <?php }?>
    </tbody>
    </table>    
</body>
<script>
(function($){
    console.log('Jquery invoked');
    $('#date1').datepicker({
        dateFormat:'yy-mm-dd'
    });
    $('#date2').datepicker({
        dateFormat:'yy-mm-dd'
    });
    $('#btnFilter').click(function(){
        window.location.href = '/fbs/getbycreatedate/'+$('#date1').val()+'/'+$('#date2').val();
    });
}(jQuery))
</script>
</html>