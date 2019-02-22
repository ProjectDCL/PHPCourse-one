<?php
const PICTURES = "80";
const MARKERS = "23";
const PENCILS = "40";

$pencils = PICTURES - MARKERS - PENCILS;
echo "Красками выполнены $pencils рисунков";