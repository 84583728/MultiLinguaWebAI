<?php
$directory = __DIR__ . '/../assets/';
$outputFile = 'index.json';
$index = [];

if (!is_dir($directory)) {
    die("错误: 目录 '$directory' 不存在\n");
}

$files = glob("$directory/*.json");
if (empty($files)) {
    die("错误: 在 '$directory' 目录中没有找到JSON文件\n");
}

foreach ($files as $file) {
    $filename = basename($file, '.json');
    $data = json_decode(file_get_contents($file), true);
    if ($data === null) continue;
    
    foreach ($data as $item) {
        if (isset($item['title_en'])) {
            $index[$item['title_en']] = $filename;
        }
    }
}

file_put_contents($outputFile, json_encode($index, JSON_UNESCAPED_UNICODE));
echo "完成: 索引文件已保存为 '$outputFile'\n";
?>