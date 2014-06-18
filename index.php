<?php

$title = 'Gifford Nowland Digital Development + Design'; // Page title
require_once('includes/overallheader.inc.php');
require_once('includes/header.inc.php');

?>

    <section id="about">
      <div class="middle">
        <div class="tagline"><span>design</span><img src="img/portrait.jpg" alt="- Gifford Nowland -"><span>build</span></div>
        <p>I&rsquo;m a <strong>front end web developer</strong> and <strong>digital user interface designer</strong> living in <span><em>New Orleans, Louisiana.</em></span> <span>I love</span> creating <strong>engaging &amp; intuitive user experiences</strong>, utilizing <strong>innovative design techniques</strong> to build responsive websites and <span>mobile applications.<a class="asterisk"><b>&#42;&#42;</b></a></span><br></p>
      </div>
    </section>
    <div id="slug">
      <p><span class="asterisk2">&#42;&#42;</span> Okay, I realize that sounds like an awful lot of web jargon&hellip; <span>To put it plainly:</span>
      <i>I like to make web and mobile experiences simple, enjoyable, and effective.</i></p>
      <hr>
      <p>So, what can I do <span>for your brand?</span></p>
      <p><a href="#skills">Read on</a> to delve deeper into my background and areas of expertise, check out my <a href="#resume">resume</a>, or skip ahead to take a look at past projects in <a href="#work" class="scrollto">my portfolio</a>. Check out caffeinated web dev insights in <a href="blog.php" class="scrollto">my blog</a>, and don't hesitate to <a href="#contact" class="scrollto">contact me</a> to discuss your project, <span> full-time position,</span> <span>or to simply</span> <span>talk shop.</span></p>
      <p><i>I look forward to <span>hearing from you!</span></i></p>
    </div>

    <article id="skills">
      <div class="contain">
      <h1>My Experience</h1>

        <h2>&ldquo;Initial Development&rdquo;</h2>
        <img src="img/timeline/win31.jpg" alt="My first computer, a Windows 3.1" class="article">
        <p>I was only six years old but I still remember how excited I was when my family purchased its first computer. My father, brother, and I waited in line for over an hour outside of a Wilmington, Delaware Circuit City on a chilly December morning to buy an AT&amp;T beige box running Windows 3.1. It boasted a state-of-the-art 540 MB Hard Drive and 8 MB of RAM, and it was only $1,099!</p>

        <p>My first foray into computer programming came two years later, and it did not end well. My curiosity for code got the best of me and at the age of nine I broke into MS-DOS, began executing commands, and promptly corrupted the operating system beyond repair. Considering the long wait in the cold only a few years earlier, my father was not impressed.</p>

        <img src="img/timeline/osx.jpg" alt="How far computers have come" class="article">

        <p class="alignRight">Fortunately, I have since learned to apply my fascination in more constructive ways. I taught myself HTML and built my first website when I was twelve. It was full of tables and garish colors, rotating GIF images, auto-playing MIDI files, and blinking text. It is most likely the reason AOL decided to abandon their "AOL Hometown". Nevertheless, throughout high school and college I continued to pursue my passion for web design and development while supplementing my expertise studying traditional graphic design, print design, interactive media, typography, illustration, animation, and marketing.</p>

        <h2>&ldquo;The Triple Threat&rdquo;</h2>
          <ul>
            <li>
              <img src="img/icon/design.svg" alt="design">
              <h3>Design<br>Dedi&shy;cation</h3>
            </li>
            <li>
              <img src="img/icon/code.svg" alt="development">
              <h3>Program&shy;ming<br>Passion</h3>
            </li>
            <li>
              <img src="img/icon/degree.svg" alt="degree">
              <h3>Business<br>Educa&shy;tion</h3>
            </li>
          </ul>
          <p>With a Bachelor of Science in Business Administration, Major in Marketing, Minor in Interactive Media*, from the University of Delaware, I added a business school foundation to my burgeoning love of exceptional design and craftily executed development. Leveraging my knowledge of and experience with design, functionality, feasibility, and business operations perspectives I am able to more effectively conceptualize and produce seamlessly-integrated applications from the planning phase all the way through deployment.</p>
          <aside>*The University of Delaware's Interactive Media Minor combined curriculum from the Computer Science &amp; Visual Communications departments, encompassing courses ranging from graphic design, web design, programming, and typography, to film production and computer animation.</aside>

      <h1 id="resume">My R&eacute;sum&eacute;</h1>

        <p>Click on my r&eacute;sum&eacute; below to open it as an interactive PDF that you can zoom, print, and save.</p>

        <p><a href="resume.php">
        <img src="img/GiffordRNowland-Resume.jpg" alt="Click here for my resume" class="resume">
        </a></p>

      </div>
    </article>

    <section id="work">
      <h1 class="sectionName">Previous Work</h1>
      <?php
      include_once('includes/portfolio.inc.php');
      ?>
    </section>

    <div id="endslug">
      <div class="contain">
        <img src="img/devices.jpg" alt="Innovative web experiences for every screen">
        <h1>About This Website</h1>
        <p>This fully-responsive, progressively-enhanced, mobile-first website was built from scratch in the spring of 2014 using Sublime Text and CodeKit, HTML5, CSS3 with SASS/Compass, PHP, Font Custom, a little JavaScript, and a whole lotta love. No templates or prefab frameworks were harmed in the making of this site, however I did borrow some math cues from the Foundation framework&ndash; props to Zurb for some kick-ass SASS.</p>
      </div>
    </div>

    <section id="contact">
      <div class="overlay">
      <div class="contain">
      <h1 class="sectionName">Contact Me</h1>
        <h3>I'm currently available for full-time and freelance opportunities!</h3>

          <div id="form-div">
            <div id="form-messages"></div>
            <form id="ajax-contact" method="post" action="./php/mailer.php" class="form">
              <p><input name="name" type="text" class="feedback-input" placeholder="Name" id="name" required></p>
              <p><input name="email" type="email" class="feedback-input" id="email" placeholder="Email" required></p>
              <p><textarea name="message" class="feedback-input" id="message" placeholder="Message" required></textarea></p>
              <p><label class="captcha"><b>Anti-SPAM:</b> <span>10+12</span> = </label> <input name="captcha" id="captcha" class="feedback-input" placeholder=" " maxlength="2" required></p>
              <input type="submit" value="SEND" id="submit"/>
            </form>
          </div>

      </div>
      </div>
    </section>

<?php
require_once('includes/footer.inc.php');
require_once('includes/toe.inc.php');
?>