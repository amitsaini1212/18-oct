
<?php
class FormData
{
    public function table()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $rows = $_POST['rows'];
            $coloums = $_POST['cols'];
            $html = '<form id="datatable">';
            for ($i = 0; $i < $rows; $i++) {
                $html .= '<div class="row">';
                for ($j = 0; $j < $coloums; $j++) {
                    $html .= '<input type="text" name="data['.$i.']['.$j.']">';
                }
                $html .= '</div>';
            }
            $html .= '<button type="submit">Save</button>';
            $html .= '</form>';
            return $html;
        }
    }
}
$form = new FormData();
echo $form->table();
?>
