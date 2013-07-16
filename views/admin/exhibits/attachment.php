<?php
$item = $attachment->getItem();
$file = $attachment->getFile();
$stem = $block->getFormStem() . "[attachments][{$index}]";
?>
<div class="attachment">
    <h5><a href="#">
        #<?php echo html_escape($item->id); ?>:
        <?php echo metadata($item, array('Dublin Core', 'Title')); ?>
    </a></h5>
    <?php if ($file): ?>
    <?php echo file_image('square_thumbnail', array(), $file); ?>
    <?php endif; ?>
    <?php echo $this->formHidden($stem . '[item_id]', $item->id); ?>
    <?php echo $this->formHidden($stem . '[file_id]', $file->id); ?>
    <?php echo $this->formHidden($stem . '[caption]', $attachment->caption); ?>
    <?php echo $this->formHidden($stem . '[order]', $attachment->order); ?>
    <span class="edit-attachment edit button"><a href="#">Edit</a></span>
    <span class="remove-attachment close button"><a href="#">Close</a></span>
</div>
