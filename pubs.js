var keywords = [];
// keywords[''] = ['thm','proofs','sn','aic','logic','chor','procs','kr','other','conf','journal','book','workshop'];

// journals
keywords['j20'] = ['logic','kr','journal'];
keywords['j19'] = ['logic','kr','journal'];
keywords['j18'] = ['logic','kr','chor','procs','journal'];
keywords['j17'] = ['thm','logic','chor','procs','journal'];
keywords['j16'] = ['aic','logic','journal'];
keywords['j15'] = ['chor','procs','journal'];
keywords['j14'] = ['thm','proofs','logic','journal'];
keywords['j13'] = ['proofs','sn','journal'];
keywords['j12'] = ['aic','kr','journal'];
keywords['j11'] = ['aic','logic','journal'];
keywords['j10'] = ['thm','proofs','sn','journal'];
keywords['j09'] = ['sn','journal'];
keywords['j08'] = ['logic','kr','journal'];
keywords['j07'] = ['proofs','sn','journal'];
keywords['j06'] = ['proofs','sn','journal'];
keywords['j05'] = ['logic','journal'];
keywords['j04'] = ['procs','journal'];
keywords['j03'] = ['logic','journal'];
keywords['j02'] = ['logic','journal'];
keywords['j01'] = ['logic','journal'];

// conferences
keywords['c52'] = ['sn','logic','conf'];
keywords['c51'] = ['chor','procs','conf'];
keywords['c50'] = ['logic','kr','conf'];
keywords['c49'] = ['thm','logic','chor','procs','conf'];
keywords['c48'] = ['chor','procs','conf'];
keywords['c47'] = ['chor','conf'];
keywords['c46'] = ['chor','procs','conf'];
keywords['c45'] = ['thm','chor','procs','conf'];
keywords['c44'] = ['chor','conf'];
keywords['c43'] = ['logic','kr','conf'];
keywords['c42'] = ['chor','procs','conf'];
keywords['c41'] = ['logic','kr','conf'];
keywords['c40'] = ['thm','logic','chor','procs','conf'];
keywords['c39'] = ['thm','logic','chor','conf'];
keywords['c38'] = ['logic','kr','conf'];
keywords['c37'] = ['chor','procs','logic','conf'];
keywords['c36'] = ['proofs','thm','conf'];
keywords['c35'] = ['thm','logic','conf'];
keywords['c34'] = ['chor','procs','conf'];
keywords['c33'] = ['thm','proofs','logic','conf'];
keywords['c32'] = ['aic','logic','conf'];
keywords['c31'] = ['thm','proofs','logic','conf'];
keywords['c30'] = ['chor','procs','conf'];
keywords['c29'] = ['chor','procs','conf'];
keywords['c28'] = ['thm','proofs','logic','conf'];
keywords['c27'] = ['chor','procs','conf'];
keywords['c26'] = ['thm','proofs','conf'];
keywords['c25'] = ['chor','procs','conf'];
keywords['c24'] = ['aic','conf'];
keywords['c23'] = ['aic','kr','conf'];
keywords['c22'] = ['aic','logic','conf'];
keywords['c21'] = ['chor','procs','conf'];
keywords['c20'] = ['aic','kr','conf'];
keywords['c19'] = ['sn','conf'];
keywords['c18'] = ['aic','conf'];
keywords['c17'] = ['thm','proofs','sn','conf'];
keywords['c16'] = ['thm','proofs','sn','conf'];
keywords['c15'] = ['kr','conf'];
keywords['c14'] = ['sn','conf'];
keywords['c13'] = ['proofs','sn','conf'];
keywords['c12'] = ['kr','conf'];
keywords['c11'] = ['sn','conf'];
keywords['c10'] = ['aic','conf'];
keywords['c09'] = ['logic','kr','conf'];
keywords['c08'] = ['kr','conf'];
keywords['c07'] = ['aic','conf'];
keywords['c06'] = ['procs','conf'];
keywords['c05'] = ['thm','proofs','conf'];
keywords['c04'] = ['thm','conf'];
keywords['c03'] = ['thm','conf'];
keywords['c02'] = ['thm','proofs','conf'];
keywords['c01'] = ['thm','conf'];

// workshops
keywords['w15'] = ['logic','kr','workshop'];
keywords['w14'] = ['thm','logic','kr','workshop'];
keywords['w13'] = ['thm','logic','chor','procs','workshop'];
keywords['w12'] = ['thm','logic','workshop'];
keywords['w11'] = ['thm','logic','workshop'];
keywords['w10'] = ['thm','proofs','chor','procs','workshop'];
keywords['w09'] = ['thm','proofs','logic','workshop'];
keywords['w08'] = ['chor','procs','workshop'];
keywords['w07'] = ['chor','procs','book','workshop'];
keywords['w06'] = ['chor','procs','workshop'];
keywords['w05'] = ['thm','proofs','sn','workshop'];
keywords['w04'] = ['kr','workshop'];
keywords['w03'] = ['thm','workshop'];
keywords['w02'] = ['thm','workshop'];
keywords['w01'] = ['thm','workshop'];

// technical reports
keywords['tr07'] = ['kr'];
keywords['tr06'] = ['logic'];
keywords['tr05'] = ['kr'];
keywords['tr04'] = ['kr'];
keywords['tr03'] = ['procs'];
keywords['tr02'] = ['logic'];
keywords['tr01'] = ['thm'];

// theses
keywords['t2'] = ['thm'];
keywords['t1'] = ['logic'];

// books
keywords['b4'] = ['other'];
keywords['b3'] = ['other'];
keywords['b2'] = ['other'];
keywords['b1'] = ['other'];

// unpublished notes
keywords['n09'] = ['logic','aic','kr'];
keywords['n08'] = ['chor','procs'];
keywords['n07'] = ['chor','procs'];
keywords['n06'] = ['chor','procs'];
keywords['n05'] = ['other'];
keywords['n04'] = ['logic'];
keywords['n03'] = ['procs'];
keywords['n02'] = ['logic'];
keywords['n01'] = ['thm'];

keywords['o6'] = ['other'];
keywords['o5'] = ['other'];
keywords['o4'] = ['other'];
keywords['o3'] = ['kr'];
keywords['o2'] = ['logic'];
keywords['o1'] = ['other'];

function contains(lista,elem) {
    for (var i=0; i<lista.length; i++)
	if (lista[i] == elem)
	    return true;
    return false;
}

function update(label) {
    lista = document.getElementsByClassName('pub');
    for (var i=0; i<lista.length; i++) {
	if (label == 'all' || contains(keywords[lista[i].id],label))
	    lista[i].style.display='block';
	else
	    lista[i].style.display='none';    
	}
}
