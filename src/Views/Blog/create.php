<?php
ob_start();
?>

<section class="create">
    <h1><i class="fas fa-list-alt"></i> Créer un Blog :</h1>

    <div>
        <div class="list">
            <div class="top">
                <form action="/dashboard/nouveau" method="post" class="blogform">
                    <input type="text" name="name" value="<?php echo old("name");?>" placeholder="Blog name" style="font-size:20px">
                    <div class="separateur" style="margin: 20px 0"></div>
                    <textarea name="com" id="com" cols="30" rows="10" style="background:black; color: white; font-size:20px"></textarea>
                    <button type="submit" name="button"><i class="fas fa-plus"></i></button>
                </form>
                <span class="error"><?php echo error("name");?></span>
            </div>

            <div class="bottom">
            </div>
        </div>


    </div>

</section>

<?php
$content = ob_get_clean();
require VIEWS . 'layout.php';
