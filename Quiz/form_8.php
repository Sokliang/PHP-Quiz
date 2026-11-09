<?php
$keyword = $_GET['q'] ?? '';

?>
<form method="GET" action="">
    <input type="text" name="q" value="<?= htmlspecialchars($keyword) ?>" placeholder="ស្វែងរក...">
    <button type="submit">ស្វែងរក</button>
</form>

<?php if (!empty($keyword)): ?>
    <p>លទ្ធផលស្វែងរកសម្រាប់៖ <b><?= htmlspecialchars($keyword) ?></b></p>
<?php endif; ?>


