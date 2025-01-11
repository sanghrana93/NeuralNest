<?php

namespace application\Controllers;

use application\Models\PortfolioModel;

class AdminController extends BaseController
{
    protected $portfolioModel;

    public function __construct()
    {
        $this->portfolioModel = new PortfolioModel();
    }

    public function index()
    {
        $data['user_analysis'] = $this->portfolioModel->findAll();
        $this->load->view('portfolio/editAnalysis', $data);
    }

    // public function create()
    // {
    //     return view('admin/create');
    // }

    // public function store()
    // {
    //     $file = $this->request->getFile('image');
    //     if ($file && $file->isValid()) {
    //         $imageName = $file->getRandomName();
    //         $file->move('uploads', $imageName);
    //     } else {
    //         $imageName = null;
    //     }

    //     $this->portfolioModel->save([
    //         'title'       => $this->request->getPost('title'),
    //         'description' => $this->request->getPost('description'),
    //         'image'       => $imageName,
    //         'url'         => $this->request->getPost('url'),
    //     ]);

    //     return redirect()->to('/admin');
    // }

    public function editAnalysis($id)
{
    // Fetch the record by ID
    $user_analysis = $this->portfolioModel->find($id);

    // Check if the record exists
    if (!$user_analysis) {
        return redirect()->to(base_url('/portfolio'))
                         ->with('error', 'Record not found.');
    }

    // Pass data to the view
    $data = [
        'user_analysis' => $user_analysis,
    ];

    // Load the edit view
    return view('portfolio/editAnalysis', $data);
}
    

//     public function update($id)
//     {
//         $model = new PortfolioModel();
    
//         $data = [
//             'title'       => $this->request->getPost('title'),
//             'description' => $this->request->getPost('description'),
//             'url'         => $this->request->getPost('url'),
//         ];
    
//         if ($image = $this->request->getFile('image')) {
//             if ($image->isValid() && !$image->hasMoved()) {
//                 $imageName = $image->getRandomName();
//                 $image->move('uploads', $imageName);
//                 $data['image'] = $imageName;
//             }
//         }
    
//         if ($model->update($id, $data)) {
//             return redirect()->to(base_url('/admin'))->with('success', 'Portfolio updated successfully.');
//         }
    
//         return redirect()->back()->with('error', 'Failed to update portfolio.');
//     }

// public function delete($id)
// {
//     $model = new PortfolioModel();
//     if ($model->delete($id)) {
//         return redirect()->to('/admin')->with('success', 'Record deleted successfully');
//     }

//     return redirect()->to('/admin')->with('error', 'Failed to delete record');
// }


}
