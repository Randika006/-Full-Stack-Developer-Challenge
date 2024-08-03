<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Business Card</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        * {box-sizing: border-box;}

        body {
          margin: 0;
          font-family: Arial, Helvetica, sans-serif;
        }

        .header {
          overflow: hidden;
          background-color: #f1f1f1;
          padding: 20px 10px;
        }

        .header a {
          float: left;
          color: black;
          text-align: center;
          padding: 12px;
          text-decoration: none;
          font-size: 18px;
          line-height: 25px;
          border-radius: 4px;
        }

        .header a.logo {
          font-size: 25px;
          font-weight: bold;
        }

        .header a:hover {
          background-color: #ddd;
          color: black;
        }

        .header a.active {
          background-color: dodgerblue;
          color: white;
        }

        .header-right {
          float: right;
        }

        @media screen and (max-width: 500px) {
          .header a {
            float: none;
            display: block;
            text-align: left;
          }

          .header-right {
            float: none;
          }
        }
    </style>

<style media="screen">
    *{
       margin: 0;
       padding: 0;
       box-sizing: border-box;
    }
  body{
      background: #fcfcfc;
      font-family: sans-serif;
   }
footer{
  position: relative;
  bottom: -124px;
  left: 0;
  right: 0;
  background: #111;
  height: auto;
  width: 100vw;

  padding-top: 40px;
  color: #fff;
}
.footer-content{
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
  text-align: center;

}
.footer-content h3{
  font-size: 2.1rem;
  font-weight: 500;
  text-transform: capitalize;
  line-height: 3rem;
}
.footer-content p{
  max-width: 500px;
  margin: 10px auto;
  line-height: 28px;
  font-size: 14px;
  color: #cacdd2;

}
.socials{
  list-style: none;
  display: flex;
  align-items: center;
  justify-content: center;
  margin: 1rem 0 3rem 0;
}
.socials li{
  margin: 0 10px;
}
.socials a{
  text-decoration: none;
  color: #fff;
  border: 1.1px solid white;
  padding: 5px;

  border-radius: 50%;

}
.socials a i{
  font-size: 1.1rem;
  width: 20px;


  transition: color .4s ease;

}
.socials a:hover i{
  color: aqua;
}

.footer-bottom{
  background: #000;
  width: 100vw;
  padding: 20px;
  padding-bottom: 40px;
  text-align: center;
}
.footer-bottom p{
  float: left;
  font-size: 14px;
  word-spacing: 2px;
  text-transform: capitalize;
}
.footer-bottom p a{
   color:#44bae8;
   font-size: 16px;
   text-decoration: none;
}
.footer-bottom span{
  text-transform: uppercase;
  opacity: .4;
  font-weight: 200;
}
.footer-menu{
   float: right;

}
.footer-menu ul{
  display: flex;
}
.footer-menu ul li{
  padding-right: 10px;
  display: block;
}
.footer-menu ul li a{
  color: #cfd2d6;
  text-decoration: none;
}
.footer-menu ul li a:hover{
  color: #27bcda;
}

@media (max-width:500px) {
.footer-menu ul{
  display: flex;
  margin-top: 10px;
  margin-bottom: 20px;
}
}
</style>




</head>
<body style="background:#6B6B6B">

    <div class="header">
        <a href="/" class="logo">Online Business Card Creater</a>
        <div class="header-right">
          <a class="active" href="/">Home</a>
          <a href="/business-card/create">Create Card</a>
          <a href="/card">All Cards</a>
        </div>
      </div>

      <br/>

    <?php $__currentLoopData = $businessCard; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $b): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

    <div class="card mb-3">
        <img class="card-img-top" src="<?php echo e(asset($b->design)); ?>" alt="Card image cap" width="150" height="300">
        <div class="card-body">
          <h5 class="card-title">Business Card Preview</h5>
          <p class="card-text"><p><b>Name: <?php echo e($b->name); ?></b></p>
          <p class="card-text"><p><b>Role: <?php echo e($b->role); ?></b></p>
          <p class="card-text"><p><b> Company Name: <?php echo e($b->company_name); ?></b></p>

          <p class="card-text"><small class="text-muted">created_at: <?php echo e($b->created_at); ?></small></p>
        </div>
      </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

      <button class="btn btn-primary" onclick="window.print()">Generate Cards</button>

      <footer>
        <div class="footer-content">
            <h3>Liberty NFT Market</h3>
            <p>Any Industry Business Cards — Create Personalized Business Cards That Reflect Your Brand Identity. Fast and Easy Process.</p>
            <ul class="socials">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
            </ul>
        </div>
        <div class="footer-bottom">
            <p>created &copy; <a href="#"></a>2024</p>

        </div>

    </footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>
<?php /**PATH C:\xampp\htdocs\Business-Card\Business_Card\resources\views/business-card/preview_2.blade.php ENDPATH**/ ?>