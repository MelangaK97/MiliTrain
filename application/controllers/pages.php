<?php
    class Pages extends CI_Controller {
        public function view($page = 'home') {
            if (!file_exists(APPPATH.'views/pages/'.$page.'.php')) {
                show_404();
            }
            $data['title'] = ucfirst($page);

            $this->load->view('templates/trainee_header');
            $this->load->view('pages/'.$page, $data);
            $this->load->view('templates/footer');
        }

        public function supervisor_view($page = 'home') {
            if (!file_exists(APPPATH.'views/pages/supervisor/'.$page.'.php')) {
                show_404();
            }
            $data['title'] = ucfirst($page);

            $this->load->view('templates/supervisor_header');
            $this->load->view('pages/supervisor/'.$page, $data);
            $this->load->view('templates/footer');
        }

        public function trainee_view($page = 'home') {
            if (!file_exists(APPPATH.'views/pages/trainee/'.$page.'.php')) {
                print_r(APPPATH.'views/pages/trainee/'.$page.'.php');
                show_404();
            }
            $data['title'] = ucfirst($page);

            $this->load->view('templates/trainee_header');
            $this->load->view('pages/trainee/'.$page, $data);
            $this->load->view('templates/footer');
        }
    }
