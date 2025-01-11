<?php
class Home_model extends CI_Model {

	public function __construct()
	{
		//$this->load->database();
		//$this->output->enable_profiler(TRUE);
	}
	public function getBannersByStatus() {
        
		$this->db->where('id', 1);
		$query = $this->db->get('banner');
		
		if ($query->num_rows() > 0) {
			return $query->row();
		} else {
			return false;
		}
    }
	public function getServicesTopMenu() {
        $this->db->select('*');
        $this->db->from('services');
        $this->db->where('status', 1);
		$this->db->where('main', 1);
		$this->db->order_by('disp_ord', 'ASC');
        $query = $this->db->get();
        
		if ($query->num_rows() > 0) {
			return $query->result();
		} else {
			return false;
		}
    }
	public function getAboutTopMenu() {
        $this->db->select('*');
        $this->db->from('custom_pages');
        $this->db->where('status', 1);
		$this->db->where('main', 1);
		$this->db->where('page_link', 'who-we-are');
        $query = $this->db->get();
        
		if ($query->num_rows() > 0) {
			return $query->result();
		} else {
			return false;
		}
    }
	public function getServicesFooterMenu() {
        $this->db->select('*');
        $this->db->from('services');
        $this->db->where('status', 1);
		$this->db->where('footer', 1);
        $query = $this->db->get();
        
		if ($query->num_rows() > 0) {
			return $query->result();
		} else {
			return false;
		}
    }
	public function getServicesByStatus() {
        $this->db->select('*');
        $this->db->from('services');
        $this->db->where('status', 1);
		$this->db->order_by('disp_ord', 'ASC');
        $query = $this->db->get();
        
		if ($query->num_rows() > 0) {
			return $query->result();
		} else {
			return false;
		}
    }
	public function getTeamByStatus() {
        $this->db->select('*');
        $this->db->from('team');
        $this->db->where('status', 1);
		$this->db->order_by('disp_ord', 'ASC');
        $query = $this->db->get();
        
		if ($query->num_rows() > 0) {
			return $query->result();
		} else {
			return false;
		}
    }
	public function getAllPagesByStatus() {
        $this->db->select('*');
        $this->db->from('custom_pages');
        $this->db->where('status', 1);
		$this->db->where('page_link', 'who-we-are');
        $query = $this->db->get();
        
		if ($query->num_rows() > 0) {
			return $query->result();
		} else {
			return false;
		}
    }
	public function getAllIndiPagesByStatus() {
        $this->db->select('*');
        $this->db->from('custom_pages');
        $this->db->where('status', 1);
		$this->db->where('page_link', 'pages');
        $query = $this->db->get();
        
		if ($query->num_rows() > 0) {
			return $query->result();
		} else {
			return false;
		}
    }
	public function getTestimonialsByStatus() {
        $this->db->select('*');
        $this->db->from('testimonial');
        $this->db->where('status', 1);
		$this->db->order_by('disp_ord', 'ASC');
        $query = $this->db->get();
        
		if ($query->num_rows() > 0) {
			return $query->result();
		} else {
			return false;
		}
    }
	public function getClientsByStatus() {
        $this->db->select('*');
        $this->db->from('client');
        $this->db->where('status', 1);
		$this->db->order_by('disp_ord', 'ASC');
        $query = $this->db->get();
        
		if ($query->num_rows() > 0) {
			return $query->result();
		} else {
			return false;
		}
    }
	public function getBlogByStatus($per_page, $offset) {
		$this->db->select('blog.*, category.category, DATE_FORMAT(blog.create_date, "%d %M %Y") as formatted_create_date', false);
        $this->db->from('blog');
        $this->db->join('category', 'blog.category_slug = category.slug', 'left');
        $this->db->where('blog.is_published', 1);
        $this->db->order_by('blog.create_date', 'DESC'); // Order by create_date in descending order
        $this->db->limit($per_page, $offset);
        $query = $this->db->get();
        
		if ($query->num_rows() > 0) {
			return $query->result();
		} else {
			return false;
		}
    }
	public function getBlogSearchByCategory($slug, $per_page, $offset) {
		$this->db->select('blog.*, category.category, DATE_FORMAT(blog.create_date, "%d %M %Y") as formatted_create_date', false);
        $this->db->from('blog');
        $this->db->join('category', 'blog.category_slug = category.slug', 'left');
        $this->db->where('blog.is_published', 1);
		$this->db->where('blog.category_slug', $slug);
        $this->db->order_by('blog.create_date', 'DESC'); // Order by create_date in descending order
        $this->db->limit($per_page, $offset);
        $query = $this->db->get();
        
		if ($query->num_rows() > 0) {
			return $query->result();
		} else {
			return false;
		}
    }
	public function getBlogSearchByString($searchString, $per_page, $offset) {
		$this->db->select('blog.*, category.category, DATE_FORMAT(blog.create_date, "%d %M %Y") as formatted_create_date', false);
        $this->db->from('blog');
        $this->db->join('category', 'blog.category_slug = category.slug', 'left');
        $this->db->where('blog.is_published', 1);
		$this->db->like('blog.blog_title', $searchString);
		$this->db->or_like('blog.content', $searchString);
        $this->db->order_by('blog.create_date', 'DESC'); // Order by create_date in descending order
        $this->db->limit($per_page, $offset);
        $query = $this->db->get();
        
		if ($query->num_rows() > 0) {
			return $query->result();
		} else {
			return false;
		}
    }
	public function get_category_blog_counts() {
		$this->db->select('category.*, COUNT(blog.id) as blog_count');
		$this->db->from('category');
		$this->db->join('blog', 'category.slug = blog.category_slug', 'left');
		$this->db->group_by('category.id');
		$query = $this->db->get();
		
		return $query->result_array();
	}
	public function getCategoryBySlug($slug) {
		$this->db->where('slug', $slug);
		$query = $this->db->get('category');
		
		if ($query->num_rows() > 0) {
            return $query->row();
        } else {
            return false;
        }
    }
	public function getBlogBySlug($slug) {
		$this->db->where('slug', $slug);
		$query = $this->db->get('blog');
		
		if ($query->num_rows() > 0) {
            return $query->row();
        } else {
            return false;
        }
    }
	public function getServiceBySlug($slug) {
		$this->db->where('slug', $slug);
		$query = $this->db->get('services');
		
		if ($query->num_rows() > 0) {
            return $query->row();
        } else {
            return false;
        }
    }
	public function getTeamBySlug($slug) {
		$this->db->where('slug', $slug);
		$query = $this->db->get('team');
		
		if ($query->num_rows() > 0) {
            return $query->row();
        } else {
            return false;
        }
    }
	public function getPageBySlug($slug) {
		$this->db->where('slug', $slug);
		$query = $this->db->get('custom_pages');
		
		if ($query->num_rows() > 0) {
            return $query->row();
        } else {
            return false;
        }
    }
	public function getBlogExceptCurrent($slug) {
		$this->db->select('blog.*, DATE_FORMAT(blog.create_date, "%M %d, %Y") as format_create_date', false);
		$this->db->from('blog');
		$this->db->where('slug !=', $slug);
		$this->db->order_by('create_date', 'desc');
		$this->db->limit(3);
		$query = $this->db->get();
	
		if ($query->num_rows() > 0) {
			return $query->result();
		} else {
			return array();
		}
        
		if ($query->num_rows() > 0) {
			return $query->result();
		} else {
			return false;
		}
	}
	public function insertContact($first_name, $last_name, $email, $phone, $message) {
		$data = array(
		'first_name' => $first_name,
		'last_name' => $last_name,
		'email' => $email,
		'phone' => $phone,
		'message' => $message
		);
		$this->db->insert('contact', $data);
		if ($this->db->affected_rows() > 0) {
			$config['protocol'] = 'sendmail';
			$config['charset'] = 'iso-8859-1';
			$config['wordwrap'] = TRUE;
			$config['mailtype'] = 'html';
			$this->email->initialize($config);
			
			$this->email->from($email);
			$this->email->to('info@chutoon.com');
			$this->email->subject('Contact form message');
			
			$html  = '<!DOCTYPE html>
			<html>
			<head>
				<meta charset="UTF-8">
				<title>Contact Form Submission</title>
			</head>
			<body style="font-family: Arial, sans-serif;">
				<h2>Contact Form Submission</h2>
				<p><strong>Name:</strong> '.$first_name.' '.$last_name.'</p>
				<p><strong>Email:</strong> '.$email.'</p>
				<p><strong>Phone:</strong> '.$phone.'</p>
				<p><strong>Message:</strong> '.$message.'</p>
				<hr>
				<p>This email was sent from the contact form on your website.</p>
			</body>
			</html>';
			$this->email->message($html);
			if ($this->email->send()) {
            	return true;
			} else {
				return false;	
			}
		} 
	}
	public function insertNewsletter($email, $from, $support, $logo) {
		$data = array(
		'email' => $email
		);
		$this->db->insert('newsletter', $data);
		if ($this->db->affected_rows() > 0) {
			$config['protocol'] = 'sendmail';
			$config['charset'] = 'iso-8859-1';
			$config['wordwrap'] = TRUE;
			$config['mailtype'] = 'html';
			$this->email->initialize($config);
			
			$this->email->from($from);
			$this->email->to($email);
			$this->email->subject('Confirmation: You are Now Part of Our Newsletter Family');
			
			$html  = '<!DOCTYPE html>
			<html lang="en">
			<head>
				<meta charset="UTF-8">
				<meta name="viewport" content="width=device-width, initial-scale=1.0">
				<title>Newsletter Subscription Confirmation</title>
				<style>
					body {
						font-family: \'Arial\', sans-serif;
						background-color: #f4f4f4;
						margin: 0;
						padding: 0;
						text-align: center;
					}
			
					.container {
						max-width: 600px;
						margin: 20px auto;
						background-color: #ffffff;
						padding: 40px;
						border-radius: 10px;
						border: 20px solid #d3d3d3; /* Adjusted border for a thick inner border with a gray color */
					}
			
					h1 {
						color: #333333;
						font-size: 28px;
						margin-bottom: 20px;
					}
			
					p {
						color: #555555;
						font-size: 16px;
						margin-bottom: 20px;
					}
			
					.button {
						display: inline-block;
						padding: 15px 30px;
						text-decoration: none;
						color: #ffffff !important;
						background-color: #3498db;
						border-radius: 5px;
						font-size: 18px;
						transition: background-color 0.3s ease;
					}
			
					.button:hover {
						background-color: #2980b9;
						color: #ffffff !important;
					}
			
					.logo-container {
						text-align: center;
						background-color: #ffffff !important; 
						padding: 10px; /* Add padding to the logo container */
					}
			
					.logo {
						max-width: 100%;
						height: auto;
					}
				</style>
			</head>
			<body>
				<div class="container">
					<div class="logo-container">
						<img src="'.base_url().'assets/images/logo.png" alt="" class="logo">
					</div>
					<h1>Welcome to Our Newsletter Community!</h1>
					<p>Thank you for subscribing to our newsletter. Get ready for exciting updates and exclusive content.</p>
					<p>If you have any questions or just want to say hello, feel free to <a href="mailto:'.$support.'">contact us</a>.</p>
					<a href="'.base_url().'blog" class="button">Visit Our Website</a>
				</div>
			</body>
			</html>';
			$this->email->message($html);
			if ($this->email->send()) {
            	return true;
			} else {
				return false;	
			}
		} 
	}
	public function getLatestPostsByCategory($limit = 3) {
		$subQuery = $this->db->select('category_slug')
		  ->distinct()
		  ->from('blog')
		  ->get_compiled_select();
		
		// Main query to fetch latest blog posts from distinct categories
		$this->db->select('blog.*, category.category');
		$this->db->join('category', 'blog.category_slug = category.slug', 'left');
		$this->db->where('blog.is_published', 1);
		$this->db->where('blog.category_slug IN (' . $subQuery . ')');
		$this->db->order_by('blog.create_date', 'DESC');
		$this->db->limit(3);
		$query = $this->db->get('blog');
		
		if ($query->num_rows() > 0) {
		  return $query->result();
		} else {
		  return false;
		}
	}
	public function getJobsByStatus() {
        $this->db->select('*');
        $this->db->from('jobs');
        $this->db->where('status', 1);
        $query = $this->db->get();
        
		if ($query->num_rows() > 0) {
			return $query->result();
		} else {
			return false;
		}
    }
	public function getAllJobs() {
		$todayDate = date('Y-m-d');
        $this->db->select('*');
		$this->db->from('jobs');
		$this->db->where('status', 1);
		$this->db->where('expire_on >=', $todayDate);
		$query = $this->db->get();
        
		if ($query->num_rows() > 0) {
			return $query->result();
		} else {
			return false;
		}
    }
	public function getJobsBySlug($slug) {
		$this->db->where('slug', $slug);
		$query = $this->db->get('jobs');
		
		if ($query->num_rows() > 0) {
            return $query->row();
        } else {
            return false;
        }
    }
	public function uploadCV()
    {
		$file_extension = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
		$randomFileName = random_string('alnum', 6);
		
        $config['allowed_types'] = 'pdf|doc|docx';
        $config['upload_path'] = './uploads/cv';
        $config['max_size'] = 2048;
		$config['file_name'] = $randomFileName . '.' . $file_extension;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('image')) {
            $data = $this->upload->data();

            // Return an array with the generated random file name and success status
            return array('file_name' => $config['file_name'], 'success' => true);
        } else {
            // Upload failed, return an array with the error message and failure status
            return array('error' => $this->upload->display_errors(), 'success' => false);
        }
    }
	public function insertApply($fname, $lname, $address, $city, $state, $country, $zip, $email, $mobile, $education, $position, $experience, $image) {
		$data = array(
		'fname' => $fname,
		'lname' => $lname,
		'address' => $address,
		'city' => $city,
		'state' => $state,
		'country' => $country,
		'zip' => $zip,
		'email' => $email,
		'mobile' => $mobile,
		'education' => $education,
		'position' => $position,
		'experience' => $experience,
		'image' => $image
		);
		$this->db->insert('applicant', $data);
		if ($this->db->affected_rows() > 0) {
			$config['protocol'] = 'sendmail';
			$config['charset'] = 'iso-8859-1';
			$config['wordwrap'] = TRUE;
			$config['mailtype'] = 'html';
			$this->email->initialize($config);
			
			$this->email->from($email);
			$this->email->to('info@chutoon.com');
			$this->email->subject('Job Application Received');
			
			$html  = '<!DOCTYPE html>
			<html>
			<head>
				<meta charset="UTF-8">
				<title>Contact Form Submission</title>
			</head>
			<body style="font-family: Arial, sans-serif;">
				<p>Dear Admin, </p>
				<p>An application has applied for the position of '.$position.'</p>
				<p><strong>Name:</strong> '.$fname.' '.$lname.'</p>
				<p><strong>Address:</strong> '.$address.'</p>
				<p><strong>City:</strong> '.$city.'</p>
				<p><strong>State:</strong> '.$state.'</p>
				<p><strong>Country:</strong> '.$country.'</p>
				<p><strong>Zip:</strong> '.$zip.'</p>
				<p><strong>Email:</strong> '.$email.'</p>
				<p><strong>Mobile:</strong> '.$mobile.'</p>
				<p><strong>Education:</strong> '.$education.'</p>
				<p><strong>Experience:</strong> '.$experience.'</p>
				<hr>
				<p>This email was sent from the contact form on your website.</p>
			</body>
			</html>';
			$this->email->message($html);
			if ($this->email->send()) {
            	return true;
			} else {
				return false;	
			}
		} 
	}
	
	public function getAlertUrl() {
        // Assuming 'settings' is your table name
        $query = $this->db->select('alert_url')
            ->from('settings')
            ->get();

        // Check if the query was successful
        if ($query) {
            // Return the value of alert_url if a row exists
            $result = $query->row();
            return $result ? $result->alert_url : null;
        } else {
            // Return null or handle the error as needed
            return null;
        }
    }
	
	public function fetchGoogleAlerts() {
        $feedUrl = $this->getAlertUrl();

        // Make an HTTP GET request using file_get_contents
        $response = file_get_contents($feedUrl);

        // Check for errors (file_get_contents returns false on failure)
        if ($response === false) {
            return false; // Return false to indicate an error
        }

        // Process the response data (you may need to parse XML or JSON, depending on the feed format)
        $data = simplexml_load_string($response); // Assuming it's XML, adjust if it's JSON

        // Convert SimpleXMLElement objects to PHP array
        $entriesArray = $this->convertEntriesToArray($data->entry);

        // Sort the entries by published date in descending order
        $sortedEntries = $this->sortEntriesByPublishedDate($entriesArray);

        return $sortedEntries;
    }

    private function convertEntriesToArray($entries) {
        $entriesArray = [];

        foreach ($entries as $entry) {
            $entryArray = [
                'title' => (string)$entry->title,
                'link' => isset($entry->link['href']) ? (string)$entry->link['href'] : null,
                'published' => (string)$entry->published,
            ];

            $entriesArray[] = $entryArray;
        }

        return $entriesArray;
    }

    private function sortEntriesByPublishedDate($entries) {
        // Sort the array by published date in descending order
        usort($entries, function ($a, $b) {
            return strtotime($b['published']) <=> strtotime($a['published']);
        });

        return $entries;
    }
	public function get_teams_except_slug($slug) {
        // Query to retrieve all records where slug is not equal to $slug
        $this->db->where('slug !=', $slug);
        $query = $this->db->get('team');

        // Return the result as an array of objects
        return $query->result();
    }
}
