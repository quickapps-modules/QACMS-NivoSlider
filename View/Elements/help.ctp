<h3>Usage</h3>
<dl>
	<dt>Basic usage:</dt>
	<dd>
		<p>
<pre>
[nivo]
	[image]http://www.example.com/image_1.jpg[/image]
	[image caption="Image Description"]http://www.example.com/image_2.jpg[/image]
	[image link="http://www.example.com/"]http://www.example.com/image_3.jpg[/image]
[/nivo]
</pre>
		</p>
	</dd>
	
	<dt>Configuring your slider canvas:</dt>
	<dd>
		<p>
<pre>
[nivo id="my-nivo-slider" theme="default" width="100%" height="30px"]
	...
[/nivo]
</pre>
			<ul>
				<li><b>id</b>: Unique ID for your slider. A random one will be generated if not given.</li>
				<li><b>theme</b>: Nivo Slider's theme to use. Included in the package: bar, dark, default, light. "default" if not given.</li>
				<li><b>width</b>: Width of Nivo's canvas, valid units: %, in, cm, mm, em, ex, pt, pc, px. Default to "px".</li>
				<li><b>height</b>: Same as width.</li>
			</ul>
		</p>
	</dd>

	<dt>Other available options:</dt>
	<dd>
		<p>
			<ul>
				<li><b>effect</b>: Specify sets like: 'fold,fade,sliceDown'. Default 'random'</li>
				<li><b>slices</b>: For slice animations. Default 15</li>
				<li><b>boxCols</b>: For box animations. Default 8</li>
				<li><b>boxRows</b>: For box animations. Default 4</li>
				<li><b>animSpeed</b>: Slide transition speed. Default 500 (1/2 sec)</li>
				<li><b>pauseTime</b>: How long each slide will show. Default 3000 (3 secs)</li>
				<li><b>startSlide</b>: Set starting Slide (0 index). Default 0</li>
				<li><b>directionNav</b>: Next & Prev navigation. Default true</li>
				<li><b>controlNav</b>: 1,2,3... navigation. Default true</li>
				<li><b>controlNavThumbs</b>: Use thumbnails for Control Nav. Default false</li>
				<li><b>pauseOnHover</b>: Stop animation while hovering. Default true</li>
				<li><b>manualAdvance</b>: Force manual transitions. Default false</li>
				<li><b>prevText</b>: Prev directionNav text. Default 'Prev'</li>
				<li><b>nextText</b>: Next directionNav text. Dfault 'Next'</li>
				<li><b>randomStart</b>: Start on a random slide. Default false</li>
			</ul>
		</p>
	</dd>

	<dt>The effect parameter can be any of the following:</dt>
	<dd>
		<p>
			<ul>
				<li>sliceDown</li>
				<li>sliceDownLeft</li>
				<li>sliceUp</li>
				<li>sliceUpLeft</li>
				<li>sliceUpDown</li>
				<li>sliceUpDownLeft</li>
				<li>fold</li>
				<li>fade</li>
				<li>random</li>
				<li>slideInRight</li>
				<li>slideInLeft</li>
				<li>boxRandom</li>
				<li>boxRain</li>
				<li>boxRainReverse</li>
				<li>boxRainGrow</li>
				<li>boxRainGrowReverse</li>
			</ul>
		</p>
	</dd>

	<dt>Advanced usage:</dt>
	<dd>
		<p>
<pre>
[nivo effect=slideInLeft controlNav=false pauseTime=6000]
	[image]http://www.example.com/image_1.jpg[/image]
	[image caption="Image Description"]http://www.example.com/image_2.jpg[/image]
	[image link="http://www.example.com/"]http://www.example.com/image_3.jpg[/image]
[/nivo]
</pre>
		</p>
	</dd>
</dl>