
<?php
use CodeIgniter\Model;
use CodeIgniter\Exceptions\PageNotFoundException;

class NewsModel extends Model
{
    protected $table = 'anvillaflor_news';

    protected $allowedFields = ['title', 'slug', 'body'];
	
    public function getNews($slug = false)
    {
        if ($slug === false) {
            return $this->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }

	
	
	
}