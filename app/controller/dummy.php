<?PHP
namespace Controller ;

class Dummy {

	public function form( \Base $f3 ) {
		die(\Template::instance()->render('form.html'));
	}

	public function search( \Base $f3 ) {
		die(var_export($f3->get('GET.searchQuery')));
	}

}
