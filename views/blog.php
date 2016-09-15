<?php 
include('views/layouts/header.php');
include('views/layouts/title.php'); 
?>



<body>

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">
                
                <?php foreach ($postsList as $listItem): ?>
                
                <!-- First Blog Post -->
                <h2>
                    <a href="#"><?php echo $listItem['title']; ?></a>
                </h2>
                <p class="lead">
                    автор: <a href="#"><?php echo $listItem['author_name']; ?></a>
                </p>
                <p><span class="glyphicon glyphicon-time">дата публикации: <?php echo $listItem['date']; ?></span></p>
                <hr>
                <img src="<?php echo $listItem['img_link']; ?>" alt="">
                <hr>
                <p><?php echo $listItem['short_content']; ?></p>
                <a class="btn btn-primary" href="<?php echo '/portfolio/andrMVC/blog/' . $listItem['id']; ?>">Читать дальше <span class="glyphicon glyphicon-chevron-right"></span></a>

                <hr>
                
                <?php endforeach; ?>


                <!-- Pager -->
                <ul class="pager">
                    <li class="previous">
                        <a href="#">&larr; Предыдущая</a>
                    </li>
                    <li class="next">
                        <a href="#">Следующая &rarr;</a>
                    </li>
                </ul>

            </div>

            <!-- Blog Sidebar Widgets Column -->
            <div class="col-md-4">

                <!-- Blog Search Well -->
                <div class="well">
                    <h4>Поиск по блогу</h4>
                    <div class="input-group">
                        <input type="text" class="form-control">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">
                                <span class="glyphicon glyphicon-search">искать</span>
                        </button>
                        </span>
                    </div>
                    <!-- /.input-group -->
                </div>

                <!-- Blog Categories Well -->
                <div class="well">
                    <h4>Категории</h4>
                    <div class="row">
                        <div class="col-lg-6">
                            <ul class="list-unstyled">
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                            </ul>
                        </div>
                        <!-- /.col-lg-6 -->
                        <div class="col-lg-6">
                            <ul class="list-unstyled">
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                            </ul>
                        </div>
                        <!-- /.col-lg-6 -->
                    </div>
                    <!-- /.row -->
                </div>

                <!-- Side Widget Well -->
                <div class="well">
                    <h4>Боковой виджет</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, perspiciatis adipisci accusamus laudantium odit aliquam repellat tempore quos aspernatur vero.</p>
                </div>

            </div>

        </div>
        <!-- /.row -->


<?php include('views/layouts/footer.php'); ?>

		