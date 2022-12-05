<?php 
     $img_dir = get_theme_root_uri()."/../uploads/";
?>
<ul x-data="{url : window.location.href}">
    <li :class="{'activeFil': url == '<?=$url?>/le-programme/'}"><a href="<?=$url?>/le-programme">Intro</a></li>
    <li :class="{'activeFil': url == '<?=$url?>/les-branches/'}"><a href="<?=$url?>/les-branches">Branches</a></li>
    <li :class="{'activeFil': url == '<?=$url?>/category/profs/'}"><a href="<?=$url?>/category/profs">Les Profs</a></li>
    <li :class="{'activeFil': url == '<?=$url?>/cheminement/'}"><a href="<?=$url?>/cheminement">Cheminement</a></li>
</ul>