<?PHP
namespace Controller ;

class Dummy {

	public function form( \Base $f3 ) {
		die(\Template::instance()->render('form.html'));
	}

	public function postSearch( \Base $f3 ) {
		die(var_export($f3->get('POST.searchQuery')));
	}
	public function getSearch(\Base $f3) {
		die(var_export($f3->get('GET.searchQuery')));
	}
}
