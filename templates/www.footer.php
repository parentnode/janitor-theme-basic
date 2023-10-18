<? $navigation = $this->navigation("main"); ?>
	</div>

	<div id="navigation">
		<ul class="navigation">
		<? if($navigation && $navigation["nodes"]): ?>
			<? foreach($navigation["nodes"] as $node): ?>
			<?= $HTML->navigationLink($node); ?>
			<? endforeach; ?>
	 	<? endif; ?>
		</ul>
	</div>

	<div id="footer">
		<ul class="servicenavigation">
			<li class="terms"><a href="/terms">Terms</a></li>
		</ul>
	</div>

</div>

<? if(session()->value("dev")) { ?>
	<script type="text/javascript" src="/js/lib/seg_<?= $this->segment() ?>_include.js"></script>
<? } else { ?>
	<script type="text/javascript" src="/js/seg_<?= $this->segment() ?>.js?rev=20231004-181004"></script>
<? } ?>

</body>
</html>