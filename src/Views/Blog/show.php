<?php
ob_start();
?>

<section class="sectionView">

    <div id="modalDelete" class="modal">
        <div>
            <p>Voulez-vous vraiment suprimer votre liste ?</p>
            <p>Vous allez perdre toute vos tâches associées !</p>
            <div>
                <button type="button" id="btnUndoDel" name="button">Annuler</button>
                <form class="formDelete" action="/dashboard/<?php echo escape($todo->getName()); ?>/delete" method="post">
                    <input type="hidden" name="idList" value="<?php echo escape($todo->getId()); ?>">
                    <button type="submit" name="button">Supprimer</button>
                </form>
            </div>
        </div>
    </div>

    <div class="viewList">
       <div class="top">
           <div class="enleveTodolist">
               <div>
                <p class="nameList"><?php echo escape($todo->getName()); ?></p>
               </div>
           </div>
       </div>

       <div class="separateur"></div>
       <div>
            <p><?php echo escape($todo->getCom()); ?></p>
       </div>

       <div class="bottom">
            
       </div>
    </div>
</section>



<!-- <script>
let showEdit = document.getElementsByClassName('showEdit');

let enleveTodolist = document.getElementsByClassName('enleveTodolist');
let afficheInput = document.getElementsByClassName('afficheInput');

Array.from(showEdit).map(function(element, index) {
  element.addEventListener('click', function() {
    enleveTodolist[index].style.display = 'none';
    afficheInput[index].style.display = 'flex';
  })
})

let btnDelete = document.getElementById('btnDeleteList');
let btnUndoDel = document.getElementById('btnUndoDel');
let modalDelete = document.getElementById('modalDelete');

btnDelete.addEventListener('click', function() {
  console.log(2);
  modalDelete.style.display = 'flex';
});

btnUndoDel.addEventListener('click', function() {
  console.log(2);
  modalDelete.style.display = 'none';
});

</script> -->

<?php

$content = ob_get_clean();
require VIEWS . 'layout.php';
