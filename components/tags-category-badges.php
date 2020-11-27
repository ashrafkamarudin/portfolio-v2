<?php 
    $tags = get_the_tags(); 
    $categories = get_the_category();
?>

<?php if (!empty($categories)): foreach ($categories as $category): ?>
    <badge class="text-indigo-600 bg-indigo-100 text-sm font-medium mr-2 mb-15">
        <?php echo $category->name; ?>
    </badge>
<?php endforeach; endif;?>

<?php if (!empty($tags)): foreach ($tags as $tag): ?>
    <badge class="uppercase text-yellow-600 bg-yellow-100 text-sm font-medium mr-2">
        #<?php echo $tag->name; ?>
    </badge>
<?php endforeach; endif;?>