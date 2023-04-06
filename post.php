<?php
        include_once("templates/header.php");

        if(isset($_GET['id'])){
             $postId = $_GET['id'];
             $currentPost;
             
             
             
             foreach($posts as $post){
                
                if($post['id'] == $postId){
                        $currentPost = $post;
                }
             }
        }
?>



<main id="post-container">
      <div class="content-container">
        <h1 id="main-title"><?= $currentPost['title']?></h1>
        <p id="post-description"><?= $currentPost['description']?></p>
        <div class="img-container">
                <img src="<?=$BASE_URL?>/img/<?=$currentPost['img']?>" alt="<?= $currentPost['title']?>">
                <p class="post-content">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consequuntur possimus eaque natus consequatur quaerat molestias nam. Assumenda autem repellendus atque laboriosam magni qui enim dolores delectus? Expedita porro laboriosam voluptas.
                Tempore tenetur officiis non eveniet eaque similique, aspernatur fugit quibusdam corrupti ipsum laboriosam officia perspiciatis blanditiis, soluta quasi enim deleniti iure temporibus rem vero labore? Quae sunt doloribus animi ullam.
                Nulla, tempore eaque illum ab unde necessitatibus vel tempora odio debitis eius minus veritatis mollitia expedita praesentium facilis officiis. Minus fuga voluptatum inventore velit sint odit iste neque? Numquam, iure?
                Porro odit, officia incidunt nesciunt laborum possimus earum, accusantium itaque sit modi optio ab. Repellat, soluta saepe ea laudantium consequatur quo iusto aperiam voluptatum temporibus perspiciatis veritatis aliquid quidem beatae!
                Suscipit, nihil itaque voluptas omnis nulla, ipsa delectus laborum, praesentium officia iste inventore corrupti soluta cum. Asperiores iusto eos assumenda enim saepe minima, cupiditate facere libero velit aperiam soluta ut.
                </p>
                <p class="post-content">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consequuntur possimus eaque natus consequatur quaerat molestias nam. Assumenda autem repellendus atque laboriosam magni qui enim dolores delectus? Expedita porro laboriosam voluptas.
                Tempore tenetur officiis non eveniet eaque similique, aspernatur fugit quibusdam corrupti ipsum laboriosam officia perspiciatis blanditiis, soluta quasi enim deleniti iure temporibus rem vero labore? Quae sunt doloribus animi ullam.
                Nulla, tempore eaque illum ab unde necessitatibus vel tempora odio debitis eius minus veritatis mollitia expedita praesentium facilis officiis. Minus fuga voluptatum inventore velit sint odit iste neque? Numquam, iure?
                Porro odit, officia incidunt nesciunt laborum possimus earum, accusantium itaque sit modi optio ab. Repellat, soluta saepe ea laudantium consequatur quo iusto aperiam voluptatum temporibus perspiciatis veritatis aliquid quidem beatae!
                Suscipit, nihil itaque voluptas omnis nulla, ipsa delectus laborum, praesentium officia iste inventore corrupti soluta cum. Asperiores iusto eos assumenda enim saepe minima, cupiditate facere libero velit aperiam soluta ut.
                </p>
        </div>
      </div>  
      <aside id="nav-container">
              <h3 id="tags-title">Tags</h3>
              <ul class="tags-list">
                      <?php foreach($currentPost['tags'] as $tag):?>
                              <li><a href="#"><?= $tag?></a></li>
                      <?php endforeach; ?>
              </ul>
              <h3 id="categories-title">Categorias</h3>
              <ul id="categories-list">
                      <?php foreach($categories as $category):?>
                              <li><a href="#"><?= $category?></a></li>
                      <?php endforeach; ?>    
              </ul>
      </aside>
</main>
<?php
        include_once("templates/footer.php");
?>