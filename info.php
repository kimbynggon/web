
<?
$d1_html = '';
            $d1_arg = [];
            for($i=0; $i < $d1_cnt; $i++)
            { 
                $d2_id = $d1[$i]['wr_id'];

                $d1_html .= '
                <div class="d1_menu" menulabel="'.$d2_id.'">
                    <a>'.$d1[$i]['wr_subject'].'</a>
                </div>
                ';
                array_push($d1_arg,$d1[$i]['wr_id']);
            }
            echo $d1_html;
            ?>
        </div>
        
        <?
        $d2_html = '';
        for($di1=0; $di1 < $d1_cnt; $di1++)
        { 
            $d2_html .= '
            <div class="d2_wrap_'.$d1[$di1]['wr_id'].'" menulabel="'.$d1[$di1]['wr_id'].'" style="width: 100%; display: none;">
            ';
            $d2_cnt = count($d2[$d1[$di1]['wr_id']]);
            for($di2=0; $di2<$d2_cnt; $di2++)
            {
                $d2_tmp = $d2[$d1[$di1]['wr_id']];
                $d2_html .= '
                <div style= "width: 200px;">'.$d2_tmp[$di2]['wr_subject'].'</div>
                ';
            }            
            $d2_html .= '
            </div>
            ';
            echo $d2_html;
        }
        ?>

    </div>

</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>

    $(document).ready(function(){
       $(document).on('mouseover','.d1_menu',function(e){
        var d1menuidx = $(this).attr('menulabel');
        $('.d2_menu_wrap').css({'display':'block'})
        $('.d2_wrap_'+d1menuidx).css({'display':'flex'});
       });
    });
</script>
<div style="width: 100%;">
        <div style="max-width: 1440px; margin: 0 auto;">
            <div class="d1_menu_div14323" style="display:flex; gap: 1.3rem; padding: 1.3rem;">
            <?= $d1_html?>
            </div>
        </div>
</div>
    <div class="d2_menu_wrap" style="max-width: 1400px; margin: 0 auto; display:none; padding: 1.3rem; gap: 1.3rem;">
    <?=$d2_html?>
        <div style="display: block; margin-left: 700px;">
            <a>img</a>
        </div>
</div>