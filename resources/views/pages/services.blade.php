@extends('layouts.home')

@section('content')
    <h1>{{$title}}</h1>
    @if(count($services) > 0)
        <ul class="list-group">
            @foreach($services as $service)
                <li class="list-group-item">{{$service}}</li>
            @endforeach
        </ul>
    @endif

    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('css/services.css')}}" rel="stylesheet">
    <link href="{{asset('css/font.css')}}" rel="stylesheet" />
<body>
	 <div id="page">
      <!--/#header-->
	
    
<section class="main-img-header elearnservicesbg">
	<div class="img-overlay">
		<div class="header-image">
			<div class="container">            
				<h1>Going Beyond Online Learning Solutions</h1>            
			 </div>
		</div>
	</div>
</section>

<section class="row-wrapper welcome-info">
	<div class="container">            
		<div class="inner-content text-center">
		<h2>A ClassRoom of E-learning Services</h2>
			<div class="separator small col-blue"></div>
			<div> <!--class="text-row"-->
				<p>ClassRoom provides much more than just custom online learning solutions. It brings decades of subject matter expertise in product sales, enterprise software, and compliance, to deliver high-impact training for performance-oriented global organizations.</p>
				<p>Every industry today has training needs. No matter which industry you belong to, your learners expect training to be engaging. At present, a big chunk of the corporate world is embracing the likes of <strong>Mobile learning, Microlearning, Video-based learning, and Gamification</strong> among others, to help learners gain knowledge.</p>
			</div>
			<!--<div align="center"><img class="img-responsive" src="//cdn.commlabindia.com/origin/images/services/1060x600.png" /></div>-->
		</div>            
	</div> 
</section>

<section class="row-wrapper row-wrapper-withbg row-wrapper-bg1">
	<div class="container">            
		<div class="inner-content text-center">
		<h2 class="text-color">Blended Learning</h2>
			<div class="separator small col-white"></div>
			<div class="text-row">
				<p class="text-color">Blending classroom training with e-learning helps organizations improve the ROI of training and the effectiveness of employees. Combining the best aspects of synchronous and asynchronous learning, it provides improved flexibility and convenience of how and when learners learn.</p>
				<p class="text-color">Our learning solutions include every aspect of training delivery, and our learning design team can create a balanced mix of methodologies such as classroom training (also called as ILT), web-based training/online learning (CBT), and webinars. With our blending learning delivery formats, you can provide comprehensive training to your people and get better value for your training dollar.</p>
			</div>
			<div><a href="../elearning-services/blended-learning.php" title="" class="btn btn-white text_color_red">Know More</a></div>
		</div>            
	</div> 
</section>

<section class="row-wrapper">
	<div class="container">            
		<div class="inner-content text-center">
		<h2 class="text-color">Custom eLearning</h2>
			<div class="separator small col-red"></div>
			<div class="text-row">
				<p>Organizations face unique challenges when training employees: too much knowledge to share, employees hard pressed for time, providing post-training support, and so on. Custom e-learning courseware are crafted exclusively for your organization. They not only convey your learning objectives effectively, but also maintain your brand’s uniqueness. </p>
				<p>Customized training solutions best meet the learning needs of today’s modern learners and can be more effective than traditional training methods. These solutions can provide bite-sized training and give information on-demand. Through custom courses, learners experience better engagement, greater interest, and improved retention.</p>
			</div>
			<div><a href="../elearning-services/custom-elearning.php" title="Know More" class="btn btn-red text_color_white">Know More</a></div>
		</div>            
	</div> 
</section>

<section class="row-wrapper row-wrapper-withbg row-wrapper-bg2">
	<div class="container">            
		<div class="inner-content text-center">
		<h2 class="text-color">Legacy Course Conversion</h2>
			<div class="separator small col-white"></div>
			<div class="text-row">
				<p class="text-color">The use of mobile devices to access learning has grown by leaps and bounds over the last few years. As learning continues to go mobile, it’s time for you to start thinking about redesigning your legacy eLearning courses and retrofit them for your mobile learners. </p>
				<p class="text-color">CommLab India’s rapid development team is world-class and highly experienced in the conversion of legacy online courses. We turn your plain, non-responsive courses into engaging, immersive learning experiences that can be accessed on a wide range of devices and browsers, using HTML5.</p>
				<p class="text-color">Our e-learning courses are based on sound instructional design principles, compatible with multiple devices and browsers. Learners will have access to precise, engaging knowledge at the point of need, on their preferred devices.</p>
			</div>
			<div><a href="../elearning-services/legacy-courseware-conversion.php" title="Know More" class="btn btn-white text_color_limeyellow">Know More</a></div>
		</div>            
	</div> 
</section>
<section class="row-wrapper">
	<div class="container">            
		<div class="inner-content text-center">
		<h2>Rapid eLearning Development </h2>
			<div class="separator small col-limeyellow"></div>
			<div class="text-row">
				<p>Rapid eLearning development is no longer seen as a cheaper alternative to end-to-end development. Not only does it have a faster turnaround time, but also the courses are mobile-compatible – something to consider when training a modern, global workforce.</p>
				<p>CommLab’s approach to rapid e-learning is simple: “more for less”. Create as many courses as possible in the shortest time possible, without compromising the quality and look-and-feel of the course. Our technical experts have clocked more than 1000 hours of e-learning, working with rapid authoring tools such as Articulate Storyline, Adobe Captivate, Lectora Inspire, and iSpring, to name a few.</p>
				
			</div>
			<div><a href="../elearning-services/rapid-elearning-development.php" title="" class="btn btn-limeyellow text_color_white">Know More</a></div>
		</div>            
	</div> 
</section>
<section class="row-wrapper row-wrapper-withbg row-wrapper-bg3">
	<div class="container">            
		<div class="inner-content text-center">
		<h2 class="text-color">Courseware Translations</h2>
			<div class="separator small col-white"></div>
			<div class="text-row">
				<p class="text-color">Today’s multinational organizations operate from different corners of the world. Creating a single course for your global audiences will not suffice, unless all your employees are familiar and comfortable with English. To train your global workforce, you need to deliver online courses in their own languages.</p>
				<p class="text-color">Effective translation of online courses helps impart better training to your global workforce and maximize the ROI on your training expenditure. CommLab provides comprehensive and exceptional translation and localization services for your e-learning courses and training resources, in practically all major international languages. </p>
			</div>
			<div><a href="../elearning-services/courseware-translations.php" title="" class="btn btn-white text_color_cyan">Know More</a></div>
		</div>            
	</div> 
</section>

<section class="row-wrapper">
	<div class="container">            
		<div class="inner-content text-center">
		<h2>Mobile Learning and Apps</h2>
			<div class="separator small col-cyan"></div>
			<div class="text-row">
				<p>Over the last 17 years, we have become efficient in using popular authoring tools and learning and training technologies. With all the experience behind us, we are able to provide solutions that are tailored to your business needs. </p>
				<p>Another area we have become proficient in is creating courses for mobile devices. We use mobile learning design principles and publish e-learning courses to the HTML5 format with responsive design. What this means is that your online courses are now compatible with and run seamlessly on all mobile devices such as iPads, tablets, laptops, smartphones, etc.  </p>
				<p>In addition, we also create mobile apps for iOS and Android devices. We have a dedicated team that builds apps for training employees or customers on the latest information.</p>
			</div>
			<div><a href="../elearning-services/mobile-learning.php" title="" class="btn btn-cyan text_color_white">Know More</a></div>
		</div>            
	</div> 
</section>

<section class="row-wrapper row-wrapper-withbg row-wrapper-bg4">
	<div class="container">            
		<div class="inner-content text-center">
		<h2 class="text-color">Digital Learning</h2>
			<div class="separator small col-white"></div>
			<div class="text-row">
				<p class="text-color">Digital technologies have forever changed the way we access knowledge and information. Digital learning enables learners to grasp concepts more quickly and fully, to connect conceptual knowledge and application more adeptly. </p>
				<p class="text-color">CommLab’s digital learning solutions are on par with today’s corporate industry standards. Our richer and interactive assessments, nuanced and customized learning paths, and latest learning technologies – such as mobile learning for performance support, Microlearning for bite-sized learning, Gamification for better learner engagement – ensure that your training strategy achieves the business goals.</p>
			</div>
			<div><a href="../elearning-services/digital-learning.php " title="" class="btn btn-white text_color_blue">Know More</a></div>
		</div>            
	</div> 
</section>

<section class="row-wrapper">
	<div class="container">            
		<div class="inner-content text-center">
		<h2 class="text-color">Microlearning</h2>
			<div class="separator small col-blue"></div>
			<div class="text-row">
				<p class="text-color">Microlearning is an ideal solution if you wish to deliver training content in the form of short, bite-sized learning nuggets. This results in improved long-term knowledge retention, and most importantly, gives learners opportunities to learn at their own pace. </p>
				<p class="text-color">CommLab’s microlearning solutions are designed to consistently provide your employees with timely knowledge, in easily digestible chunks to guarantee knowledge transfer and fill those gaping performance gaps - on time.</p>
			</div>
			<div><a href="../elearning-services/microlearning-modules.php" title="" class="btn btn-blue text_color_white">Know More</a></div>
		</div>            
	</div> 
</section>
<section class="row-wrapper  row-wrapper-withbg row-wrapper-bg5">
	<div class="container">            
		<div class="inner-content text-center">
		<h2 class="text-color">Game-based Learning</h2>
			<div class="separator small col-white"></div>
			<div class="text-row">
				<p class="text-color">Game-based learning is the process of making employees learn through game elements. These courses help teach concepts that are complex, by incorporating game elements such as leaderboards, badges, and points.</p>
				<p class="text-color">CommLab India’s game-based e-learning courses can be easily adapted to your company-specific curriculum, to achieve the desired learning outcomes. We have a large group of best-in-class learning and design experts who will analyze your learning needs and help you find success with your training goals.</p>
			</div>
			<div><a href="../elearning-services/game-based-learning.php" title="" class="btn btn-white text_color_darkgreen">Know More</a></div>
		</div>            
	</div> 
</section>
<section class="row-wrapper">
	<div class="container">            
		<div class="inner-content text-center">
		<h2>Responsive Learning</h2>
			<div class="separator small col-darkgreen"></div>
			<div class="text-row">
				<p>The phenomenal increase in the number of people using their mobile devices to access learning content has resulted in the need to look beyond desktops to deliver e-learning courses. Responsive eLearning enables sequential learning - a learner can pause the online course on one gadget and resume it on another device, exactly at the point where he/she has stopped. This makes learning highly flexible and user-friendly.</p>
				<p>Our vast experience with authoring tools such as Storyline and Captivate has enabled us to master the craft of responsive e-learning courses. We have developed responsive courses for a wide range of trainings such as product & sales, compliance among others. These courses have helped many organizations in their pursuit of helping their learners achieve complete productivity.  </p>
			</div>
			<div><a href="../elearning-services/responsive-learning-design.php" title="" class="btn btn-darkgreen text_color_white">Know More</a></div>
		</div>            
	</div> 
</section>
<section class="row-wrapper row-wrapper-withbg row-wrapper-bg6">
	<div class="container">            
		<div class="inner-content text-center">
		<h2 class="text-color">Video-based Learning</h2>
			<div class="separator small col-white"></div>
			<div class="text-row">
				<p class="text-color">Organizations are moving toward developing training content that is easy to consume and also sticks with the learner. Video brings engagement and a highly interactive component into learning. Its usage has seen a surge in recent years enabling employees – even employees in remote locations – access learning content in the comfort of their palms.</p>
				<p class="text-color">CommLab India provides video-based learning solutions that are short, yet effective and engaging. We incorporate videos in learning modules, keeping in mind both the learning outcomes and the overall training goals of the organization. Our team of experienced video developers uses the latest tools in the market to provide a high-value video-based solution that works well on desktops, and mobile platforms. </p>
			</div>
			<div><a href="../elearning-services/video-based-learning.php" title="" class="btn btn-white text_color_lightgray">Know More</a></div>
		</div>            
	</div> 
</section>
<section class="row-wrapper">
	<div class="container">            
		<div class="inner-content text-center">
		<h2 class="text-color">Simulations </h2>
			<div class="separator small col-red"></div>
			<div class="text-row">
				<p>Simulation-based e-learning is the most economical and effective way of engaging your learners. Simulations in corporate training allow learners to explore and practice in a risk-free environment, providing them a number of situations to intervene and make decisions as they would in real-world.</p>
				<p>CommLab India’s simulation-based e-learning offerings are backed by years of experience in instructional design. We develop simulations for a wide range of trainings including software training, product & sales training, and pharmaceutical & healthcare training.</p>
			</div>
			<div><a href="../elearning-services/simulations-development.php" title="Know More" class="btn btn-red text_color_white">Know More</a></div>
		</div>            
	</div> 
</section>

 </div> 

@endsection