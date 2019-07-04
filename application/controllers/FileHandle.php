<?php
    class FileHandle extends CI_Controller
    {
        public function loadimg()
        {
            $this->sdk();
            // Load the images.
            try {
                $urlpath = $this->config->base_url();
                $imgpath = '/assets/img/';
                $response = FroalaEditor_Image::getList($imgpath,$urlpath.$imgpath);
                echo stripslashes(json_encode($response));
            }
            catch (Exception $e) {
                http_response_code(404);
            }       
        }

        public function delimg()
        {
            $this->sdk();
            // Delete the image.
            try {
                $response = FroalaEditor_Image::delete($_POST['src']);
                echo stripslashes(json_encode('Success'));
            }
            catch (Exception $e) {
                http_response_code(404);
            }
        }

        public function sdk(){
            // dirname will let you access out side application folder.
            
            $path = 'assets\vendor\js\node_modules\froala';
            $file = dirname(FCPATH . $path);

            // require_once $file;

            // Include the editor SDK.
            require $file.'\froala-editor\lib\FroalaEditor.php';
        }

        public function delfile()
        {
            $namafoto = $this->input->post('filename');
            if(file_exists($file=FCPATH.'assets/img/'.$namafoto)){
                unlink($file);
                if(file_exists($file))
                {
                    http_response_code(500);
                }
                
                http_response_code(200);
                
                // Generate response.
                $response = new \StdClass;
                $response->status = 'success';
                $response->terimalink = $file;

                // Send response.
                echo stripslashes(json_encode($response));
                // echo stripslashes(json_encode('Success'));
			} else {
                http_response_code(500);
            }
        }
    }