<?php if (isset($_SESSION['success_message'])) : ?>
    <div class="alert alert-success alert-dismissible fade show d-flex align-content-center" role="alert">
        <strong><?= $_SESSION['success_message'] ?></strong>
        <?php unset($_SESSION['success_message']) ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>

<?php endif ?>

<?php if (isset($_SESSION['error_message'])) : ?>
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong><?= $_SESSION['error_message'] ?></strong>
        <?php unset($_SESSION['error_message']) ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php endif ?>

<!-- <form id="form" style="font-family:Quicksand, sans-serif;background-color:rgba(44,40,52,0.73);width:320px;padding:40px; justify-content:center" action="/auth" method="POST">
    <h1 id="head" style="color: rgb(255,255,255);font-family: Poppins, sans-serif;">Login</h1>
    <div><img class="rounded img-fluid" id="image" style="width:auto;height:auto;" src="assets/img/logo.png"></div>
    <div class="form-group mb-3"><input class="form-control" type="email" id="formum" placeholder="Email" name="email"></div>
    <div class="form-group mb-3"><input class="form-control" type="password" id="formum2" placeholder="Password" name="mdp"></div><button class="btn btn-light" id="butonas" style="width: 100%;height: 100%;margin-bottom: 10px;background-color: rgb(5,15,248);" type="submit" name="submit">Button</button><a id="linkas" style="font-size:12px;margin:auto;margin-left:0;margin-right:0;margin-bottom:0;margin-top:0;padding-left:0;padding-right:0;color:rgb(177,151,70);" href="#">Forgot your e mail or password?</a>
</form> -->

<section class="breadcrumbs-custom bg-image context-dark m-10">

    <ul class=" breadcrumbs-custom-path d-flex justify-content-evenly">
        <li><a href="/">ACCUEIL</a></li>
        <li class="active">Se connecter</li>
        <?php
        if (!isset($_SESSION['auth'])) :

        ?>
            <div>
                <a href="/inscription">INSCRIPTION</a>
            </div>
        <?php endif ?>
    </ul>
</section>
<div class="container mx-auto h-full flex flex-1 justify-center items-center">
    <div class="w-full max-w-lg">
        <div class="leading-loose">
            <form class="max-w-xl m-20 p-10 bg-white rounded shadow-xl" id="form" action="/auth" method="POST">
                <p class="text-gray-800 font-medium text-center text-lg font-bold">Login</p>
                <div class="">
                    <label class="block text-sm text-gray-00">E-mail</label>
                    <input class="w-full px-3 py-1 text-gray-700 bg-gray-200 rounded" id="username" name="email" type="email" required="" placeholder="votre e-mail" aria-label="username">
                </div>
                <div class="mt-2">
                    <label class="block text-sm text-gray-600" name="mdp" for="password">Mot de passe</label>
                    <input class="w-full px-3  py-1 text-gray-700 bg-gray-200 rounded" id="password" name="mdp" type="password" required="" placeholder="*******" aria-label="password">
                </div>
                <div class="mt-4 items-center justify-between">
                    <button class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded" type="submit" name="submit">Login</button>
                    <a class="inline-block right-0 align-baseline  font-bold text-sm text-500 hover:text-blue-800" href="#">
                        Vous n'avez pas du compte?
                    </a>
                </div>
                <a class="inline-block right-0 align-baseline font-bold text-sm text-500 hover:text-blue-800" href="#">
                    Inscrivez-vous!
                </a>
            </form>

        </div>
    </div>
</div>



<style>
    body {
        background: url("assets/img/pexels-andreea-ch-1076039.jpg") center / cover no-repeat, rgb(255, 255, 255);
    }
</style>