<!DOCTYPE html>
<html lang="en">
<head>        
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <!--[if gt IE 8]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <![endif]-->
    
    <title>PadiApp - Marketing</title>

    <link rel="icon" type="image/ico" href="favicon.ico"/>
    
    <link href="/assets/aquarius/css/stylesheets.css" rel="stylesheet" type="text/css" />
    <!--[if lt IE 8]>
        <link href="/assets/aquarius/css/ie7.css" rel="stylesheet" type="text/css" />
    <![endif]-->    
    <link rel='stylesheet' type='text/css' href='/assets/aquarius/css/fullcalendar.print.css' media='print' />
    <link rel="stylesheet" href="/assets/jquery-ui-1.12.css">
    <script src="/assets/jquery-1.12.js"></script>
    <script src="/assets/jquery-ui-1.12.js"></script>

    <script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js'></script>
    <script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js'></script>
    <script type='text/javascript' src='/assets/aquarius/js/plugins/jquery/jquery.mousewheel.min.js'></script>
    
    <script type='text/javascript' src='/assets/aquarius/js/plugins/cookie/jquery.cookies.2.2.0.min.js'></script>
    
    <script type='text/javascript' src='/assets/aquarius/js/plugins/bootstrap.min.js'></script>
    
    <script type='text/javascript' src='/assets/aquarius/js/plugins/charts/jquery.flot.js'></script>    
    <script type='text/javascript' src='/assets/aquarius/js/plugins/charts/jquery.flot.stack.js'></script>    
    <script type='text/javascript' src='/assets/aquarius/js/plugins/charts/jquery.flot.pie.js'></script>
    <script type='text/javascript' src='/assets/aquarius/js/plugins/charts/jquery.flot.resize.js'></script>
    
    <script type='text/javascript' src='/assets/aquarius/js/plugins/sparklines/jquery.sparkline.min.js'></script>
    
    <script type='text/javascript' src='/assets/aquarius/js/plugins/fullcalendar/fullcalendar.min.js'></script>
    
    <script type='text/javascript' src='/assets/aquarius/js/plugins/select2/select2.min.js'></script>
    
    <script type='text/javascript' src='/assets/aquarius/js/plugins/uniform/uniform.js'></script>
    
    <script type='text/javascript' src='/assets/aquarius/js/plugins/maskedinput/jquery.maskedinput-1.3.min.js'></script>
    
    <script type='text/javascript' src='/assets/aquarius/js/plugins/validation/languages/jquery.validationEngine-en.js' charset='utf-8'></script>
    <script type='text/javascript' src='/assets/aquarius/js/plugins/validation/jquery.validationEngine.js' charset='utf-8'></script>
    
    <script type='text/javascript' src='/assets/aquarius/js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js'></script>
    <script type='text/javascript' src='/assets/aquarius/js/plugins/animatedprogressbar/animated_progressbar.js'></script>
    
    <script type='text/javascript' src='/assets/aquarius/js/plugins/qtip/jquery.qtip-1.0.0-rc3.min.js'></script>
    
    <script type='text/javascript' src='/assets/aquarius/js/plugins/cleditor/jquery.cleditor.js'></script>
    
    <script type='text/javascript' src='/assets/aquarius/js/plugins/dataTables/jquery.dataTables.min.js'></script>    
    
    <script type='text/javascript' src='/assets/aquarius/js/plugins/fancybox/jquery.fancybox.pack.js'></script>
    
    <script type='text/javascript' src='/assets/aquarius/js/cookies.js'></script>
    <script type='text/javascript' src='/assets/aquarius/js/actions.js'></script>
    <script type='text/javascript' src='/assets/aquarius/js/charts.js'></script>
    <script type='text/javascript' src='/assets/aquarius/js/plugins.js'></script>
 
</head>
<body>
    
    <div class="header">
        <a class="logo" href="/"><img src="/img/logo_padinet_small4.png" alt="PadiApp Marketing" title="PadiApp Marketing"/></a>
        <ul class="header_menu">
            <li class="list_icon"><a href="#">&nbsp;</a></li>
        </ul>    
    </div>
    <?php $this->load->view('common/menu');?>
    <div class="content">
    <?php $this->load->view('common/breadline');?>
        <div class="workplace">
            <div class="row-fluid">                
                <div class="span12">                    
                    <div class="head clearfix">
                        <div class="isw-grid"></div>
                        <h1>Sortable table</h1>
                        <ul class="buttons">
                            <li><a href="#fModal" role="button" class="btn" data-toggle="modal">Filter</a></li>
                        </ul>                        
                    </div>
                    <div class="block-fluid table-sorting clearfix">
                        <table cellpadding="0" cellspacing="0" width="100%" class="table" id="tFB">
                            <thead>
                                <tr>
                                    <th width="25%">NoFB</th>
                                    <th width="50%">Name</th>
                                    <th width="25%">Tanggal</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($objs as $obj){?>
                                <tr>
                                    <td><?php echo $obj->nofb;?></td>
                                    <td><?php echo $obj->name;?></td>
                                    <td><?php echo $obj->createdate;?></td>
                                </tr>
                                <?php }?>
                            </tbody>
                        </table>
                    </div>
                </div>                                
            </div>            
            <div class="dr"><span></span></div>            
        </div>
    </div>
    <div id="fModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h3 id="myModalLabel">Filter</h3>
        </div>        
        <div class="row-fluid">
            <div class="block-fluid">
                <div class="row-form clearfix">
                    <div class="span3">Tanggal 1:</div>
                    <div class="span9">
                        <div id="date1"></div>
                    </div>
                </div>            
                <div class="row-form clearfix">
                    <div class="span3">Tanggal 2:</div>
                    <div class="span9">
                        <div id="date2"></div>
                    </div>                    
                </div>
            </div>                
            <div class="dr"><span></span></div>
        </div>                    
        <div class="modal-footer">
            <button class="btn btn-warning" data-dismiss="modal" aria-hidden="true" id="btnDoFilter">Saring</button> 
            <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>            
        </div>
    </div>    

</body>
<script>
(function($){
    console.log('Jquery Invoked ...');
    console.log('URL',$(location).attr('href'));
    let url = $(location).attr('href');
    arrurl = url.split('/');
    console.log('ArrURL',arrurl);
    getSQLdate = function(datestr,callback){
        let tmp = datestr.split('/');
        callback(tmp[2]+'-'+tmp[0]+'-'+tmp[1]);
    }
    getIDDate = function(datestr,callback){
        let tmp = datestr.split('-');
        callback(tmp[1]+'/'+tmp[2]+'/'+tmp[0]);
//        callback(datestr);
    }
    $("#date1").datepicker();
    $("#date2").datepicker();
    if($("#tFB").length > 0)
         {
            $("#tFB").dataTable(
                {
                    "iDisplayLength": -1, 
                    "aLengthMenu": [[-1,10,25,50,100],['All',10,25,50,100]], 
                    "sPaginationType": 
                    "full_numbers", 
                    "aoColumns": [ null, null, null],
                    "aaSorting": [[ 2, "asc" ]]
                });
         }
         
         
         getIDDate(arrurl[5],function(dt){
            console.log('DT1',dt); 
            //$("#date1").val(dt);
            $("#date1").datepicker().datepicker('setDate',new Date(dt));
         });
         getIDDate(arrurl[6],function(dt){
             console.log('DT2',dt);
             //$("#date2").val(dt);
             $("#date2").datepicker().datepicker('setDate',new Date(dt));
         });
         $('#btnDoFilter').click(function(){
             console.log('dt',$('#date1'));
             getSQLdate($('#date1').val(),function(sqldate1){
                 console.log('SQLDate 1',sqldate1);
                getSQLdate($('#date2').val(),function(sqldate2){
                    console.log('SQLDate 2',sqldate2);
                    window.location.href = '/fbs/fbbycreatedate/'+sqldate1+'/'+sqldate2;
                })

             })
             //window.location.href = '/fbs/fbbycreatedate/'+$('#date1').val()+'/'+$('#date2').val();
         });
}(jQuery))
</script>
</html>
