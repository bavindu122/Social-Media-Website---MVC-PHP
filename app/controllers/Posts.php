<?php
class Posts extends Controller
{
    public function __construct()
    {
        $this->postModel = $this->model('M_Posts');
    }
    public function index()
    {
        $posts = $this->postModel->getPosts();
        $data = [
           'posts' => $posts
        ];
        $this->view('posts/v_index', $data);
    }

    public function create()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $data = [
                'title' => trim($_POST['title']),
                'body' => trim($_POST['body']),
                'user_id' => $_SESSION['user_id'],
                'title_err' => '',
                'body_err' => ''
            ];
            if (empty($data['title'])) {
                $data['title_err'] = 'Please enter title';
            }
            if (empty($data['body'])) {
                $data['body_err'] = 'Please enter body text';
            }
            if (empty($data['title_err']) && empty($data['body_err'])) {
                if ($this->postModel->create($data)) {
                    flash('post_msg', 'Post Added');
                    redirect('Posts/index');
                } else {
                    die('Something went wrong');
                }
            } else {
                $this->view('posts/v_create', $data);
            }
        } else {
            $data = [
                'title' => '',
                'body' => ''
            ];
            $this->view('posts/v_create', $data);
        }
    }
}