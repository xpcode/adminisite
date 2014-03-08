<?php if(!empty($contact_list) AND is_array($contact_list)) {

    $c = count($contact_list);

?>

<?php foreach ($contact_list as $key=>$value): ?>

<?php if($key%2 == 0):

$temp = 0;
?>

<div class="list-block-small-group clearfix <?= $key==$c-1?'non-border':'' ?>">
<?php endif ?>

<?php $temp++; ?>

    <div class="list-block-small">
        <div class="type-title"> <em></em>
            <?=$value['project']?>
        </div>
        <div class="pl23">业务接洽：<?=$value['name']?></div>
        <div class="pl23">电话：<?=$value['tel']?></div>
        <div class="pl23">邮箱：<?=$value['email']?></div>
    </div>

<?php if($temp == 2): ?>
</div>
<?php endif ?>

<?php endforeach ?>

<?php } ?>
