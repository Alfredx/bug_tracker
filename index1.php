<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<title>׽�桪��The Bug Tracker</title>

<link rel="stylesheet" href="styles/layout.css" type="text/css">
<!--[if lt IE 9]><script src="scripts/html5shiv.js"></script><![endif]-->
<script type="text/javascript" src="scripts/jquery-PseudoCSS.1.0.js"></script>
<script type="text/javascript" src="scripts/jquery-easySlider1.7.js"></script>
<script type="text/javascript">
$(document).ready(function () {
    $("#slider").easySlider({
        auto: true,
        continuous: true,
        numeric: true,
        speed: 1200,
        pause: 5000 // slide speed><
    });
});
</script>
</head>
<body>
<div class="wrapper row1">
  <header id="header" class="clear">
    <hgroup>
      <h1><a href="index.html">׽��</a></h1>
      <h2>The New Bug Tracker</h2>
    </hgroup>
    <form action="#" method="post">
      <fieldset>
        <legend>Search:</legend>
        <input type="text" value="��������Ҫ�ġ�" onFocus="this.value=(this.value=='��������Ҫ�ġ�')? '' : this.value ;">
        <input type="submit" id="sf_submit" value="�ύ">
      </fieldset>
    </form>
	 <form action="./controller/LogonController.php" method="post">
      <fieldset>
        
		
        <input type="text" value="�û���" name="username" onFocus="this.value=(this.value=='�û���')? '' : this.value ;">
		<input type="text" value="����" name="password" onFocus="this.value=(this.value=='����')? '' : this.value ;">
        <input type="submit" id="logonsubmit" value="��½">
      </fieldset>
    </form>
    <nav class="clear">
      <ul>
        <li class="active"><a href="index.html">��ҳ</a></li>
        <li><a href="activities.html">�</a></li>
        <li><a href="bbs.html">����</a></li>
        <li><a href="top-list.html">����</a></li>
          <ul>
            <li><a href="#">Link 1</a></li>
            <li><a href="#">Link 2</a></li>
            <li><a href="#">Link 3</a></li>
          </ul>
        <li><a href="bug-submit.html">׽��</a></li>
        <li><a href="#">��ϵ����</a></li>
        <li class="last"><a href="#">��֪����ʲô��</a></li>
      </ul>
    </nav>
  </header>
</div>
<!-- content -->
<div class="wrapper row2">
  <div id="container" class="clear">
    <!-- Slider -->
    <section id="featured_slide">
      <!-- ########################################################################################## -->
      <div id="slider">
        <ul>
          <li>
            <figure><img src="�˴���ͼƬ����= =" alt="" />
              <figcaption>
                <h2>�1</h2>
                <p>�1��������</p>
                <footer class="more"><a href="#">Read More &raquo;</a></footer>
              </figcaption>
            </figure>
          </li>
          <li>
            <figure><img src="�˴���ͼƬ����= =" alt="" />
              <figcaption>
                <h2>�2</h2>
                <p>�2��������</p>
                <footer class="more"><a href="#">Read More &raquo;</a></footer>
              </figcaption>
            </figure>
          </li>
          <li>
            <figure><img src="�˴���ͼƬ����= =" alt="" />
              <figcaption>
                <h2>�3</h2>
                <p>�3��������</p>
                <footer class="more"><a href="#">Read More &raquo;</a></footer>
              </figcaption>
            </figure>
          </li>
        </ul>
      </div>
      <!-- ########################################################################################## -->
    </section>
    <!-- main content -->
    <div id="homepage">
      <!-- Introduction -->
      <section id="intro" class="clear">
        <article class="one_fifth">
          <figure><a href="#"><img src="images/4.jpg" width="130" height="130" alt=""></a>
            <figcaption>�û�1</figcaption>
          </figure>
        </article>
        <article class="one_fifth">
          <figure><a href="#"><img src="images/5.jpg" width="130" height="130" alt=""></a>
            <figcaption>�û�2</figcaption>
          </figure>
        </article>
        <article class="one_fifth">
          <figure><a href="#"><img src="images/6.jpg" width="130" height="130" alt=""></a>
            <figcaption>�û�3</figcaption>
          </figure>
        </article>
        <article class="one_fifth">
          <figure><a href="#"><img src="images/7.jpg" width="130" height="130" alt=""></a>
            <figcaption>�û�4</figcaption>
          </figure>
        </article>
        <article class="one_fifth lastbox">
          <figure><a href="#"><img src="images/8.jpg" width="130" height="130" alt=""></a>
            <figcaption>�û�5</figcaption>
          </figure>
        </article>
      </section>
      <!-- / Introduction -->
      <!-- ########################################################################################## -->
      <!-- Services -->
      <section id="services" class="last clear">
        <article class="one_third">
          <figure><img src="images/9.jpg" width="290" height="120" alt="">
            <figcaption>
              <h2>BUG1</h2>
              <p>BUG1�Ľ���</p>
              <footer class="more"><a href="#">Read More &raquo;</a></footer>
            </figcaption>
          </figure>
        </article>
        <article class="one_third">
          <figure><img src="images/10.jpg" width="290" height="120" alt="">
            <figcaption>
              <h2>BUG2</h2>
              <p>BUG2�Ľ���</p>
              <footer class="more"><a href="#">Read More &raquo;</a></footer>
            </figcaption>
          </figure>
        </article>
        <article class="one_third lastbox">
          <figure><img src="images/11.jpg" width="290" height="120" alt="">
            <figcaption>
              <h2>BUG3</h2>
              <p>BUG3�Ľ���</p>
              <footer class="more"><a href="#">Read More &raquo;</a></footer>
            </figcaption>
          </figure>
        </article>
      </section>
      <!-- / Services -->
    </div>
    <!-- / content body -->
  </div>
</div>
<!-- Footer -->
<div class="wrapper row3">
  <div id="footer" class="clear">
    <!-- ########################################################################################## -->
    <section class="one_quarter">
      <h2 class="title">From The Blog</h2>
      <article>
        <header>
          <h2>Post Title</h2>
        </header>
        <p>д������</p>
        <footer class="more"><a href="#">Read More &raquo;</a></footer>
      </article>
    </section>
    <section class="one_quarter">
      <h2 class="title">Quick Links</h2>
      <nav>
        <ul>
          <li><a href="#">���������</a></li>
          <li><a href="#">���������</a></li>
          <li><a href="#">���������</a></li>
          <li><a href="#">���������</a></li>
          <li class="last"><a href="#">���������</a></li>
        </ul>
      </nav>
    </section>
    <section class="two_quarter lastbox">
      <h2 class="title">About US</h2>
      <img class="imgl" src="images/demo/130x130.gif" width="130" height="130" alt="">
      <p>��֪��дɶ������</p>
      <footer class="more"><a href="#">Read More &raquo;</a></footer>
    </section>
    <!-- ########################################################################################## -->
  </div>
</div>
<!-- Copyright -->
<div class="wrapper row4">
  <footer id="copyright" class="clear">
    <p class="fl_left">Copyright &copy; 2012 - All Rights Reserved - <a href="#">The Bug Tracker</a></p>
  </footer>
</div>
</body>
</html>
