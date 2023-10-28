<script type='text/javascript' src='jquery-1.9.0.min.js'></script>


<style type="text/css">
	.minus {
        cursor: pointer;
        width:15px;
        float:left;
        text-align:center;
        
    }
    .plus {
        cursor: pointer;
        width:15px;
        float:right;
        text-align:center;
    }
    
    .inp_price {
        width:40px;
        text-align:center;
        border:none;
        border-left:1px solid gray;
        border-right:1px solid gray;
    }
    
    .count_box {
        width:70px;
        border:1px solid gray;  
    }
    

</style>
<script type="text/javascript" >
$(document).ready(function() {
    $('.minus').click(function () {
        var $input = $(this).parent().find('input');
        var count = parseInt($input.val()) - 1;
        count = count < 1 ? 1 : count;
        $input.val(count);
        $input.change();
        return false;
    });
    $('.plus').click(function () {
        var $input = $(this).parent().find('input');
        $input.val(parseInt($input.val()) + 1);
        $input.change();
        return false;
    });
    
  
});	
</script>

<div class='count_box'>
<div class="minus">-</div>
<input class='inp_price' type="text" value="1"/>
<div class="plus">+</div>
</div>

<br>


