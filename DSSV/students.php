<?php
//students.php: Đây là file lưu trữ các hàm lấy danh sách, thêm, xóa và sửa sinh viên
session_start();
//ham lay danh sach sinh vien trong session.
function getAllStudents()
{
if(isset($_SESSION['students'])){
	return $_SESSION['students'];
}
else{
	return array();
}
}
//ham lay mot sinh vien dua vao id.
function getStudent($student_id)
{
    $students = getAllStudents();
    foreach ($students as $item)
    {
        if ($item['student_id'] == $student_id){
            return $item;
        }
    }
     
    return array();
}
//ham xoa sinh vien
function deleteStudent($student_id)
{
    $students = getAllStudents();
    foreach ($students as $key => $item)
    {
        if ($item['student_id'] == $student_id){
            unset($students[$key]);
        }
    }
    $_SESSION['students'] = $students;
     
    return $students;
}
function updateStudent($student_id, $student_name, $student_email)
{
    $students = getAllStudents();
    $new_student = array(
        'student_id' => $student_id,
        'student_name' => $student_name,
        'student_email' => $student_email
    );
    $is_update_action = false;
    foreach ($students as $key => $item)
    {
        if ($item['student_id'] == $student_id){
            $students[$key] = $new_student;
            $is_update_action = true; 
        }
    }
    if (!$is_update_action){
        $students[] = $new_student;
    }
    $_SESSION['students'] = $students;
     
    return $students;
}
?>