<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,  initial-scale=1">
	<title>BS Typography/Text Example</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/vendor/jquery-1.12.0.min.js"></script>
</head>

<body>
	<div class="container"> 
		<h1>h1 Bootstrap heading (36 px).</h1>
		<h2>h2 Bootstrap heading (30 px).</h2>
		<h3>h3 Bootstrap heading (24 px).</h3>
		<h4>h4 Bootstrap heading (18 px).</h4>
		<h5>h5 Bootstrap heading (14 px).</h5>
		<h6>h6 Bootstrap heading (12 px).</h6>



		<h1>Lighter,Secondary Text</h1>
		<p>The small element is used to create a lighter,secondary text in any heading.</p>

		<h1>h1 heading <small>secondary text</small></h1>
		<h2>h2 heading <small>secondary text</small></h2>
		<h3>h3 heading <small>secondary text</small></h3>
		<h4>h4 heading <small>secondary text</small></h4>
		<h5>h5 heading <small>secondary text</small></h5>
		<h6>h6 heading <small>secondary text</small></h6>



		<h1>Highlight Text</h1>
		<p>Use the mark element to <mark>highlight</mark> text.</p>


		<h1>Abbreviations</h1>
		<p>The abbr element is used to mark up an abbreviation or acronym:</p>
		<p>The <abbr title="World Health Organazation">WHO</abbr> was founded in 1948.</p>

		<h1>Blockquotes</h1>
		<p>The blockquotes element is used to present content from another source:</p>
		<blockquote>
			<p>ফুলশো গ্রামে গাছপালা ঘেরা মনোরম পরিবেশে "ফুলশো উচ্চ বিদ্যালয়" ১৯৯১ সাল প্রতিষ্ঠিত হয়। নানা প্রতিকূলতার মধ্য দিয়ে স্বীয় আদর্শকে সমুন্নত রেখে শিক্ষাদানের সুমহান দৃঢ় অঙ্গীকার নিয়ে এগিয়ে চলেছে। শুধু প্রাতিষ্ঠানিক শিক্ষা নয়, মূল্যবোধের কঠোর অনুশীলন, সামাজিক, মানসিক ও শারীরিক উৎকর্ষ সাধন ও দেশ প্রেমে উদ্বুদ্ধকরণের প্রচেষ্টা ও শিক্ষার্থীদের আলোকিত মানুষ হিসেবে সমাজে প্রতিষ্ঠিত করাই এই প্রতিষ্ঠানের মূল লক্ষ্য।</p>
			<footer>From fhs.edu.bd websites</footer>
		</blockquote>


		<p>To show the quote on the right use the class .blockquote-reverse</p>
		<blockquote class="blockquote-reverse">
			<p>ফুলশো গ্রামে গাছপালা ঘেরা মনোরম পরিবেশে "ফুলশো উচ্চ বিদ্যালয়" ১৯৯১ সাল প্রতিষ্ঠিত হয়। নানা প্রতিকূলতার মধ্য দিয়ে স্বীয় আদর্শকে সমুন্নত রেখে শিক্ষাদানের সুমহান দৃঢ় অঙ্গীকার নিয়ে এগিয়ে চলেছে। শুধু প্রাতিষ্ঠানিক শিক্ষা নয়, মূল্যবোধের কঠোর অনুশীলন, সামাজিক, মানসিক ও শারীরিক উৎকর্ষ সাধন ও দেশ প্রেমে উদ্বুদ্ধকরণের প্রচেষ্টা ও শিক্ষার্থীদের আলোকিত মানুষ হিসেবে সমাজে প্রতিষ্ঠিত করাই এই প্রতিষ্ঠানের মূল লক্ষ্য।</p>
			<footer>From fhs.edu.bd websites</footer>
		</blockquote>


		<h1>Descriptions List</h1>
		<p>The dl element indicates a description list:</p>
		<dl>
		   <dt>Coffe</dt>
		   <dd>- black hot drink.</dd>
		   <dt>Milk</dt>
		   <dd>- white cold drink.</dd>
		</dl>


		<h1>Code Snippets</h1>
		<p>Inline snippets of code should be embedded in the code element:</p>
		<p>The following HTML elements:
			<code>span</code>,<code>section</code> and <code>div</code> defines a section in a document.
		</p>


		<h1>Keyboards Inputs</h1>
		<p>To indicate input that is typically entered via the keyboard,use the kbd element:</p>
		<p>Use <kbd>ctrl+p</kbd> to open the Print dialog box.</p>



		<h1>Multiple Code Lines</h1>
		<p>For multiple of lines of code,use the pre element:</p>
		<pre>
			Text in a pre element
			is displayed in a fixed-width
			font, and it preserves
			both     space and 
			line breaks.
		</pre>



		<h2>Contextual Colors</h2>
		<p>Use the contextual classes to provide "meanig through colors":</p>
		<p class="text-muted">This text is muted.</p>
		<p class="text-primary">This text is important.</p>
		<p class="text-success">This text indicates success.</p>
		<p class="text-info">This text represents some information.</p>
		<p class="text-warning">This text represents a warning.</p>
		<p class="text-danger">This text represents danger.</p>


		<h2>Contextual Backgrounds</h2>
		<p>Use the contextual background classes to provide "meanig through colors":</p>
		<p class="bg-primary">This text is important.</p>
		<p class="bg-success">This text indicates success.</p>
		<p class="bg-info">This text represents some information.</p>
		<p class="bg-warning">This text represents a warning.</p>
		<p class="bg-danger">This text represents danger.</p>


		<h2>Typography</h2>
		<p>Use the .lead class to make a paragraph "stand out":</p>
		<p class="lead">This paragraph stands out.</p>
		<p>This paragraph is a regular.</p>


		<h2>Typography</h2>
		<p>Use the .small class to make the text small:</p>
		<p class="small">This paragraph is smaller.</p>
		<p>This paragraph is a regular.</p>


		<h2>Typography Text Align</h2>
		<p class="text-left">This paragraph is left align.</p>
		<p class="text-right">This paragraph is right align.</p>
		<p class="text-center">This paragraph is center aligned.</p>
		<p class="text-justify">Text Justified  Text Justified Text Justified Text Justified Text Justified Text Justified</p>
		<p class="text-nowrap">No Wrap No Wrap No Wrap No Wrap No Wrap No Wrap No Wrap No Wrap</p>

		<p><strong>Tip:</strong>Try to resize the browser window to see the behaviour of justify and no wrap.</p>


		<h2>Typography</h2>
		<p class="text-lowercase">Lowercased Text</p>
		<p class="text-uppercase">Uppercased Text</p>
		<p class="text-capitalize">capitalized text</p>


		<p>The <abbr title="World Health Organazation">WHO</abbr> was founded in 1948.(normal abbr)</p>
		<p>The <abbr title="World Health Organazation" class="initialism">WHO</abbr> was founded in 1948.(slightly smaller abbr)</p>

		<br>

		<p>The class .list-unstyled removes the default list-style and left margin on list items (immediate children only):</p>
		<ul class="list-unstyled">
			<li>Coffe</li>
			<li>Tea</li>

			<ul>
				<li>Black tea</li>
				<li>Green tea</li>
			</ul>
			<li>Milk</li>
		</ul>

		<br>

		<p>The class .list-inline places all list  items on a single line:</p>
		<ul class="list-inline">
			<li>Coffe</li>
			<li>Tea</li>
			<li>Milk</li>
		</ul>


		<br>


		<h1>Descriptions List</h1>
		<p>Use the .dl-horizontal class line up the description list side-by-side when the browser window expends:</p>
		<dl class="dl-horizontal">
		   <dt>Coffe</dt>
		   <dd>- black hot drink.</dd>
		   <dt>Milk</dt>
		   <dd>- white cold drink.</dd>
		</dl>

		<p><strong>Tip:</strong>Try to resize the browser window to see the behaviour of the description list.</p>



		<br>

		<p>If you add the .pre-scrollable class,the pre element gets a max-height of 350px and provides a y-axis scrollable:</p>
		<pre class="pre-scrollable">
			Text in a pre element
			is displayed in a fixed-width
			font, and it preserves
			both     space and 
			line breaks.
		</pre>









	</div>
</body>
    
</html>