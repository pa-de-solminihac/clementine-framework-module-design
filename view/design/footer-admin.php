<?php
$is_iframe = $request->get('int', 'is_iframe');
if (!$is_iframe) {
?>
            </div>
        </div>
<?php
}
$this->getBlock('bootstrap3/footer', $data, $request);
