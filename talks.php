<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<?php include("basic.php"); ?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <link type="text/css" rel="stylesheet" href="lcf.css" />
    <title>Luís Cruz-Filipe: Talks</title>
  </head>
  <body>
    <div class="titlebar">
      <h1>Talks</h1>
    </div>

    <div class="middle">
      <div class="main">
	<p>This is a detailed archive of my talks in reverse chronological order. For most of these you can download a pdf version of the slides used in the presentation &ndash; exceptions occur when I simply used an old-fashioned blackboard. The older ones were generated from other formats, so they are missing the animations. Most of the abstracts and slides are in English. Exceptions are when they are in Portuguese :-) The title should give some clues as to which is the case.</p>
	<p>Presentations that refer to work that has been published include a link (next to the title) to the relevant article in my publication list.</p>

	<p>
	  <span class="invisible"><i>27.May.2024</i> &bull;</span> <span class="title">Minimizing sorting networks at sub-comparator level</span>
	  <a href="pubs.html#c52"><img width="16" height="16" alt="paper" src="book.png" /></a><br />
	  <i>27.May.2024</i> &bull; <a href="https://easychair.org/smart-program/LPAR2024/">LPAR-25</a>, Balaclava, Mauritius
	  <a href="slides/2024-05-27.pdf"><img width="16" height="16" alt="pdf" src="pdf.png" /></a>
	</p>
	<div class="abstract">
	  <b>Abstract.</b> Sorting networks are sorting algorithms that execute a sequence of operations independently of the input. Since they can be implemented directly as circuits, sorting networks are easy to implement in hardware &ndash; but they are also used often in software to improve performance of base cases of standard recursive sorting algorithms. For this purpose, they are translated into machine-code instructions in a systematic way.<br />
	  Recently, a deep-learning system discovered better implementations than previously known of some sorting networks with up to 8 inputs. In this article, we show that all these examples are instances of a general pattern whereby some instructions are removed. We show that this removal can be done when a particular set of constraints on integers is satisfiable, and identify conditions where we can reduce this problem to propositional satisfiability. We systematically apply this general construction to improve the best-known implementations of sorting networks of size up to 128, which are the ones most commonly found in software implementations.</div>

	<p>
	  <span class="invisible"><i>23.Feb.2024</i> &bull;</span> <span class="title">Reasoning about choreographic programs</span>
	  <a href="pubs.html#c46"><img width="16" height="16" alt="paper" src="book.png" /></a><br />
	  <i>23.Feb.2024</i> &bull; Seminário de Lógica Matemática, Lisboa, Portugal
	  <a href="slides/2024-02-23.pdf"><img width="16" height="16" alt="pdf" src="pdf.png" /></a><br />
	  <i>27.Jun.2023</i> &bull; <a href="https://acp.sdu.dk/seminars_and_visitors.html">Concurrency and Logic seminar</a>, University of Southern Denmark, Denmark
	  <a href="slides/2023-06-27.pdf"><img width="16" height="16" alt="pdf" src="pdf.png" /></a><br />
	  <i>20.Jun.2023</i> &bull; <a href="https://www.discotec.org/2023/coordination.html">COORDINATION 2023</a>, Lisbon, Portugal
	  <a href="slides/2023-06-20.pdf"><img width="16" height="16" alt="pdf" src="pdf.png" /></a>
	</p>
	<div class="abstract">
	  <b>Abstract.</b> Choreographic programming is a paradigm where a concurrent or distributed system is developed in a top-down fashion. Programs, called choreographies, detail the desired interactions between processes, and can be compiled to distributed implementations based on message passing. Choreographic languages usually guarantee deadlock-freedom and provide an operational correspondence between choreographies and their compiled implementations, but until now little work has been done on verifying other properties.<br />
	  This paper presents a Hoare-style logic for reasoning about the behaviour of choreographies, and illustrate its usage in representative examples. We show that this logic is sound and complete, and discuss decidability of its judgements. Using existing results from choreographic programming, we show that any functional correctness property proven for a choreography also holds for its compiled implementation.</div>

	<p>
	  <span class="invisible"><i>2.Feb.2024</i> &bull;</span> <span class="title">Can you answer while you wait?</span>
	  <a href="pubs.html#j20"><img width="16" height="16" alt="paper" src="book.png" /></a><br />
	  <i>2.Feb.2024</i> &bull; <a href="https://www.math.tecnico.ulisboa.pt/~css/daysinlogic2024/">Days in Logic 2024</a>, Lisbon, Portugal
	  <a href="slides/2024-02-02.pdf"><img width="16" height="16" alt="pdf" src="pdf.png" /></a>
	</p>
	<div class="abstract">
	  <b>Abstract.</b> Many modern-day systems rely on information that is constantly arriving, and they need to make decisions based on it &ndash; a problem known as <i>continuous query answering</i>. In many situations, these systems can benefit from identifying possible outcomes that are consistent with the data available so far. Such scenarios are called hypothetical answers, and previous work has defined them precisely and shown how they can be updated in step with the arrival of additional input.<br />
	  Most existing formalisms assume that data always arrives instantaneously, which is not realistic. In this work, we relax this problem by allowing data to arrive later, and potentially out of order. By revisiting the underlying intuitions in previous work, we develop a more general framework that supports communication delays. The interaction between communication delays and negation poses some challenging problems, which we address using fixpoint theory. We show that the relevant fixpoints can be computed in finite time by a carefully designed algorithm.</div>

	<p>
	  <span class="invisible"><i>3.Aug.2023</i> &bull;</span> <span class="title">Now it compiles!</span>
	  <a href="pubs.html#c49"><img width="16" height="16" alt="paper" src="book.png" /></a><br />
	  <i>3.Aug.2023</i> &bull; <a href="https://mizar.uwb.edu.pl/ITP2023/">ITP 2023</a>, Białystok, Poland
	  <a href="slides/2023-08-03.pdf"><img width="16" height="16" alt="pdf" src="pdf.png" /></a>
	</p>
	<div class="abstract">
	  <b>Abstract.</b> Choreographic programming is a paradigm where developers write the global specification (called choreography) of a communicating system, and then a correct-by-construction distributed implementation is compiled automatically. Unfortunately, it is possible to write choreographies that cannot be compiled, because of issues related to an agreement property known as knowledge of choice. This forces programmers to reason manually about implementation details that may be orthogonal to the protocol that they are writing.<br />
	  Amendment is an automatic procedure for repairing uncompilable choreographies. We present a formalisation of amendment from the literature, built upon an existing formalisation of choreographic programming. However, in the process of formalising the expected properties of this procedure, we discovered a subtle counterexample that invalidates the original published and peer-reviewed pen-and-paper theory. We discuss how using a theorem prover led us to both finding the issue, and stating and proving a correct formulation of the properties of amendment.</div>

	<p>
	  <span class="invisible"><i>6.Jul.2023</i> &bull;</span> <span class="title">Symbolic AI and Mathematics</span><br />
	  <i>6.Jul.2023</i> &bull; <a href="https://sites.fct.unl.pt/tca2023/">TCA 2023</a>, Pocinho, Portugal
	  <a href="slides/2023-07-06.pdf"><img width="16" height="16" alt="pdf" src="pdf.png" /></a>
	</p>
	<div class="abstract">
	  <b>Abstract.</b> Symbolic AI is a collective term for the subfields of Artificial Intelligence that aim at modelling knowledge and reasoning. Methods of symbolic AI typically can provide explanations for their conclusions, making them of special interest for applications where being able to understand the results is essential. In this talk we briefly explore the connection between Mathematics and Symbolic AI, and how they can mutually benefit from each other.</div>

	<p>
	  <span class="invisible"><i>13.Jun.2023</i> &bull;</span> <span class="title">A formalized framework for choreographic programming</span>
	  <a href="pubs.html#w13"><img width="16" height="16" alt="paper" src="book.png" /></a><br />
	  <i>13.Jun.2023</i> &bull; <a href="https://types2023.webs.upv.es/">TYPES 2023</a>, Valencia, Spain
	  <a href="slides/2023-06-13.pdf"><img width="16" height="16" alt="pdf" src="pdf.png" /></a>
	</p>
	<div class="abstract">
	  <b>Abstract.</b> An overview of the last years' achievements in the formalization of choreographic programming.</div>

	<p>
	  <span class="invisible"><i>6.Jan.2023</i> &bull;</span> <span class="title">Logic and explainable AI in the legal domain</span><br />
	  <i>6.Jan.2023</i> &bull; Seminário de Lógica Matemática, Lisboa, Portugal
	  <a href="slides/2023-01-06.pdf"><img width="16" height="16" alt="pdf" src="pdf.png" /></a>
	</p>
	<div class="abstract">
	  <b>Abstract.</b> In spite of the huge increase in the usage of Artificial Intelligence (AI) in nearly all areas of everyday life, applications to the legal domain are surprisingly absent. This is due to the fact that most current AI systems are black-box constructions, which are incompatible with the ethical requirements underlying most western legal systems.<br />
	  In this talk we discuss this problem and introduce our project on building an expert system within the legal domain based on logical techniques.<br />
	  Joint work with Jonas Vistrup.</div>

	<p>
	  <span class="invisible"><i>227.Jul.2022</i> &bull;</span> <span class="title">Formalising choreographic programming</span>
	  <a href="pubs.html#c40"><img width="16" height="16" alt="paper" src="book.png" /></a><br />
	  <i><span class="invisible">22</span>7.Jul.2022</i> &bull; Mathematics Seminar, Universidade do Minho, Braga, Portugal
	  <a href="slides/2022-07-07.pdf"><img width="16" height="16" alt="pdf" src="pdf.png" /></a><br />
	  <i>13.Apr.2022</i> &bull; <a href="https://nova-lincs.di.fct.unl.pt/seminars/">DI/NOVA LINCS seminar</a>, Monte da Caparica, Portugal
	  <a href="slides/2022-04-13.pdf"><img width="16" height="16" alt="pdf" src="pdf.png" /></a><br />
	  <i><span class="invisible">1n</span>8.Sep.2021</i> &bull; <a href="https://ictac2021.github.io/">ICTAC 2021</a>, Nur-Sultan, Kazakhstan
	  <a href="slides/2021-09-08.pdf"><img width="16" height="16" alt="pdf" src="pdf.png" /></a>
	</p>
	<div class="abstract">
	  <b>Abstract.</b> Choreographic programming is a paradigm for developing concurrent and distributed systems, where programs are <em>choreographies</em> that define, from a global viewpoint, the computations and interactions that communicating processes should enact. <em>Choreography compilation</em> translates choreographies into the local definitions of process behaviours, given as terms in a process calculus.<br />
	  Proving choreography compilation correct is challenging and error-prone, because it requires relating languages in different paradigms (global interactions vs local actions) and dealing with a combinatorial explosion of proof cases. We present the first certified program for choreography compilation for a nontrivial choreographic language supporting recursion.
	</div>

	<p>
	  <span class="invisible"><i>1.Jul.2022</i> &bull;</span> <span class="title">Formalizing approximation fixpoint theory in Coq</span>
	  <a href="pubs.html#w12"><img width="16" height="16" alt="paper" src="book.png" /></a><br />
	  <i>1.Jul.2022</i> &bull; <a href="https://daysinlogic2022.ualg.pt/">Days in Logic 2022</a>, Faro, Portugal
	  <a href="slides/2022-07-01.pdf"><img width="16" height="16" alt="pdf" src="pdf.png" /></a>
	</p>
	<div class="abstract">
	  <b>Abstract.</b> Preliminary report of a formalization of Approximation Fixpoint Theory in Coq.</div>

	<p>
	  <span class="invisible"><i>17.Jun.2022</i> &bull;</span> <span class="title">Can you answer while you wait?</span>
	  <a href="pubs.html#c41"><img width="16" height="16" alt="paper" src="book.png" /></a><br />
	  <i>17.Jun.2022</i> &bull; <a href="https://foiks2022.github.io/">FoIKS 2022</a>, Helsinki, Finland
	  <a href="slides/2022-06-17.pdf"><img width="16" height="16" alt="pdf" src="pdf.png" /></a><br />
	  <i>21.Jun.2022</i> &bull; <a href="https://acp.sdu.dk/seminars_and_visitors.html">Concurrency and Logic seminar</a>, University of Southern Denmark, Denmark
	  <a href="slides/2022-06-21.pdf"><img width="16" height="16" alt="pdf" src="pdf.png" /></a>
	</p>
	<div class="abstract">
	  <b>Abstract.</b> Continuous query answering is a challenging problem faced by systems that need to reason over data as it arrives. Recently, a logicbased approach to this problem has been proposed that advocates generating hypothetical query answers &ndash; potential answers that are consistent with the available data, but still require confirmation by future input.<br />
	  The current work studies hypothetical query answering in realistic settings, where data may arrive out of order. This requires revising its semantics and reanalysing the intuitions that led to the design of the existing algorithms, in order to develop a novel incremental online algorithm that takes into account that past data may yet arrive. We also discuss how our methods may be extended to channels with losses.</div>

	<p>
	  <span class="invisible"><i>122.Jul.2021</i> &bull;</span> <span class="title">Formalizing choreographic programming</span><br />
	  <span class="invisible">2</span><i>12.Jul.2021</i> &bull; <a href="https://sites.google.com/view/vest21/home">VEST 2021</a>, online workshop
	  <a href="slides/2021-07-12.pdf"><img width="16" height="16" alt="pdf" src="pdf.png" /></a><br />
	  <span class="invisible"><i>20.Nov.2020</i> &bull;</span> <span class="title">Formalizing choreographies in Coq</span><br />
	  <i>20.Nov.2020</i> &bull; <a href="https://acp.sdu.dk/seminars_and_visitors.html">Concurrency and Logic seminar</a>, University of Southern Denmark, Denmark
	  <a href="slides/2020-11-20.pdf"><img width="16" height="16" alt="pdf" src="pdf.png" /></a>
	</p>
	<div class="abstract">
	  <b>Abstract.</b> Choreographic programming is a paradigm for developing concurrent and distributed systems, where programs are choreographies that define, from a global viewpoint, the computations and interactions that communicating processes should enact. Choreography compilation translates choreographies into the local definitions of process behaviours, given as terms in a process calculus.<br />
	  We present a formalisation in Coq of the theory of a minimal choreography language. In this formalisation we define the syntax and semantics of this language and its associated process calculus, prove that choreography compilation for this language is sound and complete, and show that the choreography language is Turing-complete. To the best of our knowledge, this is the first formalisation of choreography compilation for a nontrivial language supporting recursion.
	</div>

	<p>
	  <span class="invisible"><i>1.Jul.2021</i> &bull;</span> <span class="title">Formalising a Turing-complete choreographic language in Coq</span>
	  <a href="pubs.html#c39"><img width="16" height="16" alt="paper" src="book.png" /></a><br />
	  <i>1.Jul.2021</i> &bull; <a href="http://easyconferences.eu/itp2021/">ITP 2021</a>, Rome, Italy
	  <a href="slides/2021-07-01.pdf"><img width="16" height="16" alt="pdf" src="pdf.png" /></a>
	</p>
	<div class="abstract">
	  <b>Abstract.</b> The theory of choreographic languages typically includes a number of complex results that are proved by structural induction. The high number of cases and the subtle details in some of them lead to long reviewing processes, and occasionally to errors being found in published proofs. In this work, we take a published proof of Turing completeness of a choreographic language and formalise it in Coq. Our development includes formalising the choreographic language, its basic properties, Kleene's theory of partial recursive functions, the encoding of these functions as choreographies, and a proof that this encoding is correct.<br />
	    With this effort, we show that theorem proving can be a very useful tool in the field of choreographic languages: besides the added degree of confidence that we get from a mechanised proof, the formalisation process led us to a significant simplification of the underlying theory. Our results offer a foundation for the future formal development of choreographic languages.
	</div>

	<p>
	  <span class="invisible"><i>14.Jun.2021</i> &bull;</span> <span class="title">A formalisation of approximation fixpoint theory</span>
	  <a href="pubs.html#w11"><img width="16" height="16" alt="paper" src="book.png" /></a><br />
	  <i>14.Jun.2021</i> &bull; <a href="https://types21.liacs.nl/">TYPES 2021</a>, Leiden, The Netherlands
	  <a href="slides/2021-06-14.pdf"><img width="16" height="16" alt="pdf" src="pdf.png" /></a>
	</p>
	<div class="abstract">
	  <b>Abstract.</b> Preliminary report on a formalization of approximation fixpoint theory in the theorem prover Coq.
	</div>

	<p>
	  <span class="invisible"><i>31.Mai.2021</i> &bull;</span> <span class="title">Can computers prove theorems?</span><br />
	  <i>31.Mai.2021</i> &bull; Mathematical Logic Webinar, FCUL, Lisboa, Portugal
	  <a href="slides/2021-05-31.pdf"><img width="16" height="16" alt="pdf" src="pdf.png" /></a>
	</p>
	<div class="abstract">
	  <b>Abstract.</b> The proof of the four-color theorem in 1976 is usually referenced as the birth of computer-assisted mathematical proofs, although some earlier examples exist. Since then, computers have slowly started working their way into mathematicians' toolboxes; and the relevance of computers for mathematical proofs was confirmed with the inclusion of a panel discussion on the topic at ICM 2018.<br />
	  In this talk we discuss the logical foundations of computer proofs and what it means to say that a theorem has been proved with the help of a computer. We cover some recent examples from combinatorics and number theory, and discuss ongoing work around the topic of session types.
	</div>

	<p>
	  <span class="invisible"><i>13.Nov.2020</i> &bull;</span> <span class="title">Choreography extraction</span><br />
	  <i>13.Nov.2020</i> &bull; <a href="https://acp.sdu.dk/seminars_and_visitors.html">Concurrency and Logic seminar</a>, University of Southern Denmark, Denmark
	  <a href="slides/2020-11-13.pdf"><img width="16" height="16" alt="pdf" src="pdf.png" /></a><br />
	  <span class="invisible"><i>27.Apr.2017</i> &bull;</span> <span class="title">The Paths to Choreography Extraction</span>
	  <a href="pubs.html#c25"><img width="16" height="16" alt="paper" src="book.png" /></a><br />
	  <i>27.Apr.2017</i> &bull; <a href="http://www.etaps.org/2017/fossacs">FoSSaCS 2017</a>, Uppsala, Sweden
	  <a href="slides/2017-04-27.pdf"><img width="16" height="16" alt="pdf" src="pdf.png" /></a>
	</p>
	<div class="abstract">
	  <b>Abstract.</b> Choreographies are global descriptions of interactions among concurrent components, most notably used in the settings of verification (e.g., Multiparty Session Types) and synthesis of correct-by-construction software (Choreographic Programming).  They require a top-down approach: programmers first write choreographies, and then use them to verify or synthesize their programs.  However, most existing software does not come with choreographies yet, which prevents their application.<br />
	    To attack this problem, we propose a novel methodology (called choreography extraction) that, given a set of programs or protocol specifications, automatically constructs a choreography that describes their behavior. The key to our extraction is identifying a set of paths in a graph that represents the symbolic execution of the programs of interest. Our method improves on previous work in several directions: we can now deal with programs that are equipped with a state and internal computation capabilities; time complexity is dramatically better; we capture programs that are correct but not necessarily synchronizable, i.e., they work because they exploit asynchronous communication.
	</div>
	
	<p>
	  <span class="invisible"><i>18.Jun.2020</i> &bull;</span> <span class="title">Certificeret software og explainable AI</span><br />
	  <i>18.Jun.2020</i> &bull; Forsvars roadshow, Odense, Denmark
	  <a href="slides/2020-06-18.pdf"><img width="16" height="16" alt="pdf" src="pdf.png" /></a>
	</p>
	<div class="abstract">
	  <b>Abstract.</b> Small presentation on certified software and explainable AI.
	</div>

	<p>
	  <span class="invisible"><i>17.Jan.2020</i> &bull;</span> <span class="title">Hypothetical answers to continuous queries on data streams</span>
	  <a href="pubs.html#c38"><img width="16" height="16" alt="paper" src="book.png" /></a><br />
	  <span class="invisible">2</span><i>9.Feb.2020</i> &bull; <a href="https://aaai.org/Conferences/AAAI-20/">AAAI-20</a>, New York, NY, USA
	  <a href="slides/2020-02-09.pdf"><img width="16" height="16" alt="pdf" src="pdf.png" /></a><br />
	  <i>30.Jan.2020</i> &bull; <a href="https://dil2020.campus.ciencias.ulisboa.pt/">Days in Logic 2020</a>, FCUL, Lisboa, Portugal
	  <a href="slides/2020-01-30.pdf"><img width="16" height="16" alt="pdf" src="pdf.png" /></a><br />
	  <i>17.Jan.2020</i> &bull; <a href="https://acp.sdu.dk/seminars_and_visitors.html">Concurrency and Logic seminar</a>, University of Southern Denmark, Denmark
	  <a href="slides/2020-01-17.pdf"><img width="16" height="16" alt="pdf" src="pdf.png" /></a>
	</p>
	<div class="abstract">
	  <b>Abstract.</b> Continuous queries over data streams often delay answers until some relevant input arrives through the data stream. These delays may turn answers, when they arrive, obsolete to users who sometimes have to make decisions with no help whatsoever. Therefore, it can be useful to provide hypothetical answers - &ldquo;given the current information, it is possible that X will become true at time <i>t</i>&rdquo; - instead of no information at all.<br />
	    In this talk we present a semantics for queries and corresponding answers that covers such hypothetical answers, together with an online algorithm for updating the set of facts that are consistent with the currently available information.
	</div>

	<p>
	  <span class="invisible"><i>13.Jun.2019</i> &bull;</span> <span class="title">Formalizing a Turing-complete choreography calculus in Coq</span>
	  <a href="pubs.html#w10"><img width="16" height="16" alt="paper" src="book.png" /></a><br />
	  <i>13.Jun.2019</i> &bull; <a href="https://cas.oslo.no/types2019/">TYPES 2019</a>, Oslo, Norway
	  <a href="slides/2019-06-13.pdf"><img width="16" height="16" alt="pdf" src="pdf.png" /></a>
	</p>
	<div class="abstract">
	  <b>Abstract.</b> Preliminary report on a formalization of a choreography language in the theorem prover Coq.
	</div>

	<p>
	  <span class="invisible"><i>7.Aug.2018</i> &bull;</span> <span class="title">Some thoughts on machine-assisted proofs</span>
	  <a href="pubs.html#c36"><img width="16" height="16" alt="paper" src="book.png" /></a><br />
	  <i>7.Aug.2018</i> &bull; <a href="http://icm2018.org">ICM 2018</a>, Rio de Janeiro, Brazil
	  <a href="slides/2018-08-07.pdf"><img width="16" height="16" alt="pdf" src="pdf.png" /></a>
	</p>
	<div class="abstract">
	  <b>Abstract.</b> Invited contribution to the expert panel on Machine-Assisted Proofs held in the International Congress of Mathematicians.
	</div>

	<p>
	  <span class="invisible"><i>27.Sep.2017</i> &bull;</span> <span class="title">How to Get More Out of Your Oracles</span>
	  <a href="pubs.html#c33"><img width="16" height="16" alt="paper" src="book.png" /></a><br />
	  <i>28.Sep.2017</i> &bull; <a href="http://itp2017.cic.unb.br">ITP 2017</a>, Brasília, Brazil
	  <a href="slides/2017-09-28.pdf"><img width="16" height="16" alt="pdf" src="pdf.png" /></a><br />
	  <span class="invisible"><i>27.Sep.2017</i> &bull;</span> <span class="title">Formal Verification of Very Large Proofs in Coq</span><br />
	  <span class="invisible">2</span><i>7.Sep.2017</i> &bull; <a href="http://part.compute.dtu.dk">PART Workshop 2017</a>, <a href="http://compute.dtu.dk">Technical University of Denmark</a>, Lyngy, Denmark
	  <a href="slides/2017-09-07.pdf"><img width="16" height="16" alt="pdf" src="pdf.png" /></a>
	</p>
	<div class="abstract">
	  <b>Abstract.</b> Formal verification of large computer-generated proofs often relies on certified checkers based on oracles. We propose a methodology for such proofs, advocating a separation of concerns between formalizing the underlying theory and optimizing the algorithm implemented in the checker, based on the observation that such optimizations can benefit significantly from adequately adapting the oracle.
	</div>

	<p>
	  <span class="invisible"><i>21.Jul.2017</i> &bull;</span> <span class="title">The Boolean Pythagorean Triples Problem in Coq</span>
	  <a href="pubs.html#j14"><img width="16" height="16" alt="paper" src="book.png" /></a><br />
	  <i>21.Jul.2017</i> &bull; <a href="http://math.ist.utl.pt/seminars/clc/">Logic and Computation Seminar</a>,
	  <a href="http://www.ist.utl.pt">Instituto Superior Técnico</a>, Lisboa, Portugal
	  <a href="slides/2017-07-21.pdf"><img width="16" height="16" alt="pdf" src="pdf.png" /></a><br />
	  <i><span class="invisible">l</span>1.Jun.2017</i> &bull; <a href="http://types2017.elte.hu/">TYPES 2017</a>, Budapest, Hungary
	  <a href="slides/2017-06-01.pdf"><img width="16" height="16" alt="pdf" src="pdf.png" /></a>
	</p>
	<div class="abstract">
	  <b>Abstract.</b> The Boolean Pythagorean Triples problem asks: does there exist a binary coloring of the natural numbers such that every Pythagorean triple contains an element of each color? This problem was first solved in 2016, when Heule, Kullmann and Marek encoded a finite restriction of this problem as a propositional formula and showed its unsatisfiability. In this work we formalize their development in the theorem prover Coq. We state the Boolean Pythagorean Triples problem in Coq, define its encoding as a propositional formula and establish the relation between solutions to the problem and satisfying assignments to the formula. We verify Heule et al.'s proof by showing that the symmetry breaks they introduced to simplify the propositional formula are sound, and by implementing a correct-by-construction checker for proofs of unsatisfiability based on reverse unit propagation.
	</div>

	<p>
	  <span class="invisible"><i>21.Jun.2017</i> &bull;</span> <span class="title">On Asynchrony and Choreographies</span>
	  <a href="pubs.html#w08"><img width="16" height="16" alt="paper" src="book.png" /></a><br />
	  <i>21.Jun.2017</i> &bull; <a href="http://2017.discotec.org/workshops/ice-2017">ICE 2017</a>, Neuch&acirc;tel, Switzerland
	  <a href="slides/2017-06-21.pdf"><img width="16" height="16" alt="pdf" src="pdf.png" /></a>
	</p>
	<div class="abstract">
	  <b>Abstract.</b> Choreographic Programming is a paradigm for the development of concurrent software, where deadlocks are prevented syntactically.  However, choreography languages are typically synchronous, whereas many real-world systems have asynchronous communications.  Previous attempts at enriching choreographies with asynchrony rely on <i>ad-hoc</i> constructions, whose adequacy is only argued informally.  In this work, we formalise the properties that an asynchronous semantics for choreographies should have: messages can be sent without the intended receiver being ready, and all sent messages are eventually received.  We explore how out-of-order execution, used in choreographies for modelling concurrency, can be exploited to endow choreographies with an asynchronous semantics. Our approach satisfies the properties we identified.  We show how our development yields a pleasant correspondence with FIFO-based asynchronous messaging, modelled in a process calculus, and discuss how it can be adopted in more complex choreography models.
	</div>

	<p>
	  <span class="invisible"><i>20.Jun.2017</i> &bull;</span> <span class="title">Procedural Choreographic Programming</span>
	  <a href="pubs.html#c30"><img width="16" height="16" alt="paper" src="book.png" /></a><br />
	  <i>20.Jun.2017</i> &bull; <a href="http://2017.discotec.org/">FORTE 2017</a>, Neuch&acirc;tel, Switzerland
	  <a href="slides/2017-06-20.pdf"><img width="16" height="16" alt="pdf" src="pdf.png" /></a>
	</p>
	<div class="abstract">
	  <b>Abstract.</b> Choreographic Programming is an emerging paradigm for correct-by-construction concurrent programming. However, its applicability is limited by the current lack of support for reusable procedures.<br />
	    We propose Procedural Choreographies (PC), a choreographic language model with full procedural abstraction. PC includes unbounded process creation and name mobility, yielding a powerful framework for writing correct concurrent algorithms that can be compiled into a process calculus. This increased expressivity requires a typing discipline to ensure that processes are properly connected when enacting procedures.
	</div>

	<p>
	  <span class="invisible"><i>12.May.2017</i> &bull;</span> <span class="title">Formally Proving the Boolean Pythagorean Triples Conjecture</span>
	  <a href="pubs.html#c28"><img width="16" height="16" alt="paper" src="book.png" /></a><br />
	  <i>12.May.2017</i> &bull; <a href="http://easychair.org/smart-program/LPAR-21/">LPAR-21</a>, Ma&uacute;n, Botswana
	  <a href="slides/2017-05-12.pdf"><img width="16" height="16" alt="pdf" src="pdf.png" /></a>
	</p>
	<div class="abstract">
	  <b>Abstract.</b> In 2016, Heule, Kullmann and Marek solved the Boolean Pythagorean Triples problem: is there a binary coloring of the natural numbers such that every Pythagorean triple contains an element of each color?  By encoding a finite portion of this problem as a propositional formula and showing its unsatisfiability, they established that such a coloring does not exist.  Subsequently, this answer was verified by a correct-by-construction checker extracted from a Coq formalization, which was able to reproduce the original proof.  However, none of these works address the question of formally addressing the relationship between the propositional formula that was constructed and the mathematical problem being considered.  In this work, we formalize the Boolean Pythagorean Triples problem in Coq.  We recursively define a family of propositional formulas, parameterized on a natural number <i>n</i>, and show that unsatisfiability of this formula for any particular <i>n</i> implies that there does not exist a solution to the problem.  We then formalize the mathematical argument behind the simplification step in the original proof of unsatisfiability and the logical argument underlying cube-and-conquer, obtaining a verified proof of Heule <i>et al.</i>'s solution.
	</div>

	<p>
	  <span class="invisible"><i>31.Mar.2017</i> &bull;</span> <span class="title">Connectors Meet Choreographies</span>
	  <a href="pubs.html#n06"><img width="16" height="16" alt="paper" src="book.png" /></a><br />
	  <i>31.Mar.2017</i> &bull; Talks@DI, <a href="http://www.di.fc.ul.pt">Department of Informatics</a>, FCUL, Lisboa, Portugal
	  <a href="slides/2017-03-31.pdf"><img width="16" height="16" alt="pdf" src="pdf.png" /></a>
	</p>
	<div class="abstract">
	  <b>Abstract.</b> Choreographic Programming is a paradigm for developing concurrent programs that are deadlock-free by construction, by syntactically disallowing mismatched I/O and then synthesising process implementations automatically. Most choreography models assume that all communication occurs synchronously between two parties. This has been relaxed in some settings, allowing for example asynchronous communications, many-to-one, or one-to-many. However, these extensions are hardcoded in the syntax and semantics of each particular model.<br />
	  In this work, we present Cho-Reo-graphies (CR), a model where choreographies are parametric in the (Reo) connectors through which parties communicate. CR is the first choreography model where different communication semantics (e.g., synchronous and asynchronous) can freely be mixed in the same choreography. We prove that if a choreography respects the rules of the connectors that it uses, then the process implementation that we can synthesise from it enjoys deadlock freedom.
	</div>

	<p>
	  <span class="invisible"><i>25.Nov.2016</i> &bull;</span> <span class="title">Foundational Questions in Choreographic Programming</span><br />
	  <i>25.Nov.2016</i> &bull; <a href="http://math.ist.utl.pt/seminars/clc/">Logic and Computation Seminar</a>,
	  <a href="http://www.ist.utl.pt">Instituto Superior Técnico</a>, Lisboa, Portugal
	  <a href="slides/2016-11-25.pdf"><img width="16" height="16" alt="pdf" src="pdf.png" /></a>
	</p>
	<div class="abstract">
	  <b>Abstract.</b> Choreographies are widely used for the specification of concurrent and distributed software architectures. In previous work, we proposed Core Choreographies (CC), a model for investigating foundational questions in choreography calculi. In this talk, we discuss two such questions: asynchrony and behaviour extraction.<br />
	  Asynchronous communications are ubiquitous in real-world systems, and we show how it can be modeled either by endowing CC with a different semantics or by minimally extending its syntax and implementing message queues. Since CC is a core model, these constructions can be generalized to most choreography languages.<br />
	  Extraction concerns the issue of deciding whether the behaviour of a given process network can be expressed as a choreography, and if possible finding this choreography. In general, these questions are undecidable; we show that in CC we can find algorithms to answer them.
	</div>

	<p>
	  <span class="invisible"><i>23.Nov.2016</i> &bull;</span> <span class="title">Active Integrity Constraints for Multi-Context Systems</span>
	  <a href="pubs.html#c23"><img width="16" height="16" alt="paper" src="book.png" /></a><br />
	  <i>23.Nov.2016</i> &bull; <a href="http://ekaw2016.cs.unibo.it/">EKAW 2016</a>, Bologna, Italy
	  <a href="slides/2016-11-23.pdf"><img width="16" height="16" alt="pdf" src="pdf.png" /></a>
	</p>
	<div class="abstract">
	  <b>Abstract.</b> We introduce a formalism to couple integrity constraints over general-purpose knowledge bases with actions that can be executed to restore consistency.  This formalism generalizes active integrity constraints over databases.  In the more general setting of multi-context systems, adding repair suggestions to integrity constraints allows defining simple iterative algorithms to find all possible grounded repairs &ndash; repairs for the global system that follow the suggestions given by the actions in the individual rules.  We apply our methodology to ontologies, and show that it can express most relevant types of integrity constraints in this domain.
	</div>

	<p>
	  <span class="invisible"><i>23.Abr.2016</i> &bull;</span> <span class="title">A Core Model for Choreographic Programming</span>
	  <a href="pubs.html#c27"><img width="16" height="16" alt="paper" src="book.png" /></a><br />
	  <i>21.Oct.2016</i> &bull; <a href="http://events.femto-st.fr/facs2016/en">FACS 2016</a>, Besançon, France
	  <a href="slides/2016-10-21.pdf"><img width="16" height="16" alt="pdf" src="pdf.png" /></a><br />
	  <span class="invisible"><i>23.Abr.2016</i> &bull;</span> <span class="title">A Turing-Complete Choreography Calculus</span><br />
	  <span class="invisible"><i>1</i></span><i>9.Sep.2016</i> &bull; ACBD Seminar, <a href="http://www.gla.ac.uk/schools/computing/">University of Glasgow</a>, Scotland
	  <a href="slides/2016-09-09.pdf"><img width="16" height="16" alt="pdf" src="pdf.png" /></a><br />
	  <i>23.Abr.2016</i> &bull; <a href="https://festschrift.math.tecnico.ulisboa.pt/">Am&iacute;lcar Sernadas Festschrift</a>, Lisbon, Portugal
	  <a href="slides/2016-04-23.pdf"><img width="16" height="16" alt="pdf" src="pdf.png" /></a>
	</p>
	<div class="abstract">
	  <b>Abstract.</b> We investigate the foundations of Choreographic Programming, a paradigm for writing concurrent programs that are deadlock free by construction, guided by the notion of computation. We start by introducing Minimal Choreographies (MC), a language that includes only the essential primitives of the paradigm. MC is minimal with respect to Turing completeness: it implements all computable functions, and restricting its syntax breaks this property. Our methodology yields a natural notion of computation for choreographies, which can be used to generate concurrent implementations of independent computations automatically. Finally, we show that a Turing complete fragment of MC can be correctly projected to a process calculus (synthesis), which is thus both deadlock free and Turing complete.
	</div>

	<p>
	  <span class="invisible"><i>21.Dec.2015</i> &bull;</span> <span class="title">Grounded Fixpoints and Active Integrity Constraints</span>
	  <a href="pubs.html#c22"><img width="16" height="16" alt="paper" src="book.png" /></a><br />
	  <span class="invisible" style="font-size:smaller"><i>l</i></span><i>18.Oct.2016</i> &bull; <a href="http://software.imdea.org/Conferences/ICLP2016/">ICLP 2016</a>, New York, NY, USA
	  <a href="slides/2016-10-18.pdf"><img width="16" height="16" alt="pdf" src="pdf.png" /></a><br />
	  <i>21.Dec.2015</i> &bull; LabMAg Seminar, <a href="http://www.di.fc.ul.pt">Department of Informatics</a>, FCUL, Lisboa, Portugal
	</p>
	<div class="abstract">
	  <b>Abstract.</b> The problem of repairing a database that is inconsistent with respect to a given set of integrity constraints has been intensively studied during the last fifty years.
	  One important aspect is choosing among several possible candidate repairs, and several authors have proposed different criteria to achieve this task.<br />
	  In this talk, we address this question using ideas from algebraic fixpoint theory.
	  We show how database repairs can be modelled as fixpoints of particular operators on databases.
	  The recently introduced notion of grounded fixpoint then induces a corresponding notion of grounded database repair that captures several natural intuitions.
	  Focusing in particular on the approach of active integrity constraints, we show that grounded repairs lie between the well-studied semantics of founded and justified repairs, providing a middle-ground that avoids the unintuitive examples of both definitions.<br />
	  In order to study grounded repairs in their full generality, we need to generalize the notion of grounded fixpoint to non-deterministic operators.
	  We propose such a definition and illustrate its plausibility in the database context.
	</div>

	<p>
	  <span class="invisible"><i>6.Oct.2016</i> &bull;</span> <span class="title">Foundations of Choreographies</span>
	  <a href="pubs.html#w06"><img width="16" height="16" alt="paper" src="book.png" /></a><br />
	  <i>6.Oct.2016</i> &bull; <a href="http://www.behavioural-types.eu/meetings/final-meeting-6th-7th-october-2016-in-lisbon">BETTY Meeting</a>, Lisbon, Portugal
	  <a href="slides/2016-10-06.pdf"><img width="16" height="16" alt="pdf" src="pdf.png" /></a>
	</p>
	<div class="abstract">
	  <b>Abstract.</b> Recent advances in choreographic programming.
	</div>

	<p>
	  <span class="invisible"><i>7.Jun.2016</i> &bull;</span> <span class="title">Choreographies in Practice</span>
	  <a href="pubs.html#c21"><img width="16" height="16" alt="paper" src="book.png" /></a><br />
	  <i>7.Jun.2016</i> &bull; <a href="https://forte2016.discotec.org/">FORTE 2016</a>, Heraklion, Greece
	  <a href="slides/2016-06-07.pdf"><img width="16" height="16" alt="pdf" src="pdf.png" /></a>
	</p>
	<div class="abstract">
	  <b>Abstract.</b> Choreographic Programming is a development methodology for concurrent software that guarantees correctness by construction. The key to this paradigm is to disallow mismatched I/O operations in programs, and mechanically synthesise process implementations.<br />
	  There is still a lack of practical illustrations of the applicability of choreographies to computational problems with standard concurrent solutions. In this work, we explore the potential of choreographic programming by writing concurrent algorithms for sorting, solving linear equations, and computing Fast Fourier Transforms. The lessons learned from this experiment give directions for future improvements of the paradigm.
	</div>

	<p>
	  <span class="invisible"><i>8.Mar.2016</i> &bull;</span> <span class="title">Integrity Constraints for General-Purpose Knowledge Bases</span>
	  <a href="pubs.html#c20"><img width="16" height="16" alt="paper" src="book.png" /></a><br />
	  <i>8.Mar.2016</i> &bull; <a href="http://cdcc.faw.jku.at/FoIKS2016/">FoIKS 2016</a>, Linz, Austria
	  <a href="slides/2016-03-08.pdf"><img width="16" height="16" alt="pdf" src="pdf.png" /></a>
	</p>
	<div class="abstract">
	  <b>Abstract.</b> Integrity constraints in databases have been studied extensively since the 1980s, and they are considered essential to guarantee database integrity. In recent years, several authors have studied how the same notion can be adapted to reasoning frameworks, in such a way that they achieve the purpose of guaranteeing a system's consistency, but are kept separate from the reasoning mechanisms.<br />
	  In this talk we focus on multi-context systems, a general-purpose framework for combining heterogeneous reasoning systems, enhancing them with a notion of integrity constraints that generalizes the corresponding concept in the database world.
	</div>

	<p>
	  <span class="invisible"><i>27.Aug.2015</i> &bull;</span> <span class="title">A Formalized Checker for Size-Optimal Sorting Networks</span>
	  <a href="pubs.html#c17"><img width="16" height="16" alt="paper" src="book.png" /></a><br />
	  <i>27.Aug.2015</i> &bull; <a href="www.inf.kcl.ac.uk/staff/urbanc/itp-2015/">ITP 2015</a>, Nanjing, China
	  <a href="slides/2015-08-27.pdf"><img width="16" height="16" alt="pdf" src="pdf.png" /></a>
	</p>
	<div class="abstract">
	  <b>Abstract.</b> Since the proof of the four color theorem in 1976, computer-generated proofs have become a reality in mathematics and computer science. During the last decade, we have seen formal proofs using verified proof assistants being used to verify the validity of such proofs.<br />
	  In this talk, we describe a formalized theory of size-optimal sorting networks. From this formalization we extract a certified checker that successfully verifies computer-generated proofs of optimality on up to 8 inputs. The checker relies on an untrusted oracle to shortcut the search for witnesses on more than 1.6 million NP-complete subproblems.
	</div>

	<p>
	  <span class="invisible"><i>21.Jul.2015</i> &bull;</span> <span class="title">A Turing-Complete Choreography Calculus</span>
	  <a href="pubs.html#j15"><img width="16" height="16" alt="paper" src="book.png" /></a><br />
	  <i>21.Jul.2015</i> &bull; LabMAg Seminar, <a href="http://www.di.fc.ul.pt">Department of Informatics</a>, FCUL, Lisboa, Portugal
	  <a href="slides/2015-07-21.pdf"><img width="16" height="16" alt="pdf" src="pdf.png" /></a>
	</p>
	<div class="abstract">
	  <b>Abstract.</b> Choreographic Programming is a programming paradigm for building concurrent software that is deadlock-free by construction, by disallowing mismatched I/O operations in the language used to write programs (called choreographies).
	  Previous models for choreographic programming are either trivially Turing complete, because they include arbitrary local computations at each process, or trivially Turing incomplete, e.g., because termination is decidable.<br />
	  In this work, we explore the core expressivity of choreographies, by introducing a minimal language (AC) with restricted local computation (zero, successor, and equality).
	  AC is Turing complete purely by virtue of the communication structures that can be written in it.
	  We show that a Turing-complete fragment of AC can be correctly projected to an actor-like process calculus (AP), thus identifying a process language that is both deadlock-free and Turing-complete.
	  By embedding AC into CC, a standard model for choreographies based on sessions, we also characterise a Turing-complete fragment of CC, showing that the local computation primitives found in previous works do not add expressive power.
	  As a corollary, we identify a fragment of the session-based &pi;-calculus that is both deadlock-free and Turing complete.
	</div>

	<p>
	  <span class="invisible"><i>16.Jul.2015</i> &bull;</span> <span class="title">Optimizing a Certified Proof Checker for a Large-Scale Computer-Generated Proof</span>
	  <a href="pubs.html#c16"><img width="16" height="16" alt="paper" src="book.png" /></a><br />
	  <i>16.Jul.2015</i> &bull; <a href="http://cicm-conference.org/2015/">CICM 2015</a>, Washington, DC, USA
	  <a href="slides/2015-07-16.pdf"><img width="16" height="16" alt="pdf" src="pdf.png" /></a>
	</p>
	<div class="abstract">
	  <b>Abstract.</b> In recent work, we formalized the theory of optimal-size sorting networks with the goal of extracting a verified checker for the large-scale computer-generated proof that 25 comparisons are optimal when sorting 9 inputs, which required more than a decade of CPU time and produced 27 GB of proof witnesses. The checker uses an untrusted oracle based on these witnesses and is able to verify the smaller case of 8 inputs within a couple of days, but it did not scale to the full proof for 9 inputs.<br />
	  In this talk, we describe several non-trivial optimizations of the algorithm in the checker, obtained by appropriately changing the formalization and capitalizing on the symbiosis with an adequate implementation of the oracle. We provide experimental evidence of orders of magnitude improvements to both runtime and memory footprint for 8 inputs, and actually manage to check the full proof for 9 inputs.
	</div>

	<p>
	  <span class="invisible"><i>20.May.2015</i> &bull;</span> <span class="title">A Formalized Checker for Size-Optimal Sorting Networks</span>
	  <a href="pubs.html#w05"><img width="16" height="16" alt="paper" src="book.png" /></a><br />
	  <i>20.May.2015</i> &bull; <a href="http://cs.ioc.ee/types15/">TYPES 2015</a>, Tallinn, Estonia
	  <a href="slides/2015-05-20.pdf"><img width="16" height="16" alt="pdf" src="pdf.png" /></a>
	</p>
	<div class="abstract">
	  <b>Abstract.</b> In 2014 we first proved that 25 comparisons are optimal for sorting 9 inputs. In this talk, we present a formal proof of this result, obtained by using the results from the original computer-assisted proof as an oracle to a checker extracted from a Coq formalization. Besides the result itself, the techniques we used help us understand how to deal with computer-assisted proofs involving amounts of witnesses previously considered prohibitive.
	</div>

	<p>
	  <span class="invisible"><i>28.Apr.2015</i> &bull;</span> <span class="title">Advances in Sorting Networks</span><br />
	  <i>28.Apr.2015</i> &bull; Brouwer Seminar, <a href="http://www.ru.nl">University of Nijmegen</a>, The Netherlands
	  <a href="slides/2015-04-28.pdf"><img width="16" height="16" alt="pdf" src="pdf.png" /></a>
	</p>
	<div class="abstract">
	  <b>Abstract.</b> Sorting networks are a very simple model of data-independent sorting algorithms, suitable for implementation in hardware. Proving optimality of a sorting network, whether in terms of number of necessary gates or execution steps, remains however a daunting task, as it requires showing that no smaller arrangements of gates can sort all inputs. Due to the huge combinatorial explosion, after the initial results obtained in the 60s there was almost no advance in this field for nearly fifty years.<br />
	  In this talk, I will introduce the topic and the problems we are most interested in addressing, and show how a novel combination of new theoretical insights and advances in computer-science has led to a number of computer-assisted proofs of new results about sorting networks during the last two years.
	</div>

	<p>
	  <span class="invisible"><i>85.Mar.2015</i> &bull;</span> <span class="title">Sorting Networks: the End Game</span>
	  <a href="pubs.html#c14"><img width="16" height="16" alt="paper" src="book.png" /></a><br />
	  <i>13.Apr.2015</i> &bull; LabMAg Seminar, <a href="http://www.di.fc.ul.pt">Department of Informatics</a>, FCUL, Lisboa, Portugal
	  <a href="slides/2015-04-13.pdf"><img width="16" height="16" alt="pdf" src="pdf.png" /></a><br />
	  <span class="invisible"><i>8</i></span><i>5.Mar.2015</i> &bull; <a href="http://grammars.grlmc.com/lata2015/">LATA 2015</a>, Nice, France
	  <a href="slides/2015-03-05.pdf"><img width="16" height="16" alt="pdf" src="pdf.png" /></a><br />
	  <i>14.Nov.2014</i> &bull; <a href="http://arco.nu/arco_events/november14workshop/">ARCO Workshop</a>, Copenhagen, Denmark
	  <a href="slides/2014-11-14.pdf"><img width="16" height="16" alt="pdf" src="pdf.png" /></a>
	</p>
	<div class="abstract">
	  <b>Abstract.</b> Sorting networks are a very simple model of data-independent sorting algorithms, suitable for implementation in hardware. Proving optimality of a sorting network, whether in terms of necessary gates or in terms of execution steps, remains however a daunting task, as it requires showing that no smaller arrangements of gates can sort all outputs. Due to the huge combinatorial explosion, this problem has only been settled for inputs of small size, and all current results rely on breaking symmetries in the first comparisons made. In this talk, we discuss the properties of the last comparators in a sorting network, and show how these results help both towards improving the best-known sorting networks or proving their optimality.
	</div>

	<p>
	  <span class="invisible"><i>26.Nov.2014</i> &bull;</span> <span class="title">Information Flow within Relational Multi-context Systems</span>
	  <a href="pubs.html#c12"><img width="16" height="16" alt="paper" src="book.png" /></a><br />
	  <i>26.Nov.2014</i> &bull; <a href="http://www.ida.liu.se/conferences/EKAW14/home.html">EKAW 2014</a>, Linköping, Sweden
	  <a href="slides/2014-11-26.pdf"><img width="16" height="16" alt="pdf" src="pdf.png" /></a>
	</p>
	<div class="abstract">
	  <b>Abstract.</b> Multi-context systems (MCSs) are an important framework for heterogeneous combinations of systems within the Semantic Web.  In this talk, we propose generic constructions to achieve specific forms of interaction in a principled way, and systematize some useful techniques to work with ontologies within an MCS.  All these mechanisms are presented in the form of general-purpose design patterns.  Their study also suggests new ways in which this framework can be further extended.
	</div>

	<p>
	  <span class="invisible"><i>18.Jun.2014</i> &bull;</span> <span class="title">Twenty-five Comparators is Optimal when Sorting Nine Inputs</span>
	  <a href="pubs.html#c13"><img width="16" height="16" alt="paper" src="book.png" /></a><br />
	  <i>10.Nov.2014</i> &bull; <a href="http://ictai2014.cs.ucy.ac.cy/">ICTAI 2014</a>, Limassol, Cyprus
	  <a href="slides/2014-11-10.pdf"><img width="16" height="16" alt="pdf" src="pdf.png" /></a><br />
	  <span class="invisible"><i>18.Jun.2014</i> &bull; </span><span class="title">Proofs for Minimality of Sorting Networks by Logic Programming</span><br />
	  <span class="invisible" style="font-size:smaller"><i>1</i></span><i>17.Jul.2014</i> &bull; <a href="http://www.easychair.org/smart-program/VSL2014/CICLOPSWLPE-index.html">CICLOPS-WLPE Workshop</a>, Vienna, Austria (with <a href="http://imada.sdu.dk/~petersk/">P.&nbsp;Schneider-Kamp</a>)
	  <a href="slides/2014-07-17.pdf"><img width="16" height="16" alt="pdf" src="pdf.png" /></a><br />
	  <span class="invisible"><i>18.Jun.2014</i> &bull; </span><span class="title">Minimal-Size Sorting Networks for 9 and 10 Inputs</span><br />
	  <span class="invisible" style="font-size:smaller"><i>1</i></span><i>11.Jul.2014</i> &bull; <a href="http://math.ist.utl.pt/seminars/clc/">Logic and Computation Seminar</a>,
	  <a href="http://www.ist.utl.pt">Instituto Superior Técnico</a>, Lisboa, Portugal
	  <a href="slides/2014-07-11.pdf"><img width="16" height="16" alt="pdf" src="pdf.png" /></a><br />
	  <span class="invisible"><i>m</i></span><i>9.Jul.2014</i> &bull; LabMAg Seminar, <a href="http://www.di.fc.ul.pt">Department of Informatics</a>, FCUL, Lisboa, Portugal
	  <a href="slides/2014-07-09.pdf"><img width="16" height="16" alt="pdf" src="pdf.png" /></a><br />
	  <i>18.Jun.2014</i> &bull; <a href="http://www.ruc.dk/">University of Roskilde</a>, Denmark
	  <a href="slides/2014-06-18.pdf"><img width="16" height="16" alt="pdf" src="pdf.png" /></a>
	</p>
	<div class="abstract">
	  <b>Abstract.</b> We present a computer-assisted non-existence proof of nine-input sorting networks consisting of 24 comparators, hence showing that the 25-comparator sorting network found by Floyd in 1964 is optimal. As a corollary, we obtain that the 29-comparator network found by Waksman is optimal when sorting ten inputs. This closes the two smallest open instances of the optimal size sorting network problem, which have been open since the results of Floyd and Knuth from 1966 proving optimality for sorting networks of up to eight inputs.<br />
	  The entire implementation is written in SWI-Prolog and was run on a cluster of 12 nodes with 12 cores each able to run concurrently a total of 288 threads, making extensive use of both SWI-Prolog's built-in <code>concurrency/3</code>. The search space of 2.2&times;10<sup>37</sup> comparator networks was exhausted after just under 10 days of computation. This shows the ability of logic programming to provide a scalable parallel implementation while at the same time instilling a high level of trust in the correctness of the proof.
	</div>

	<p>
	  <span class="invisible"><i>123.Sep.2014</i> &bull;</span> <span class="title">The Quest for Optimal Sorting Networks</span>
	  <a href="pubs.html#c11"><img width="16" height="16" alt="paper" src="book.png" /></a><br />
	  <i><span class="invisible">1</span>23.Sep.2014</i> &bull; <a href="http://synasc.ro/2014/">SYNASC 2014</a>, Timisoara, Romania
	  <a href="slides/2014-09-23.pdf"><img width="16" height="16" alt="pdf" src="pdf.png" /></a><br />
	  <i>19.Aug.2014</i> &bull; <a href="http://www.imada.sdu.dk/Events/CS_Colloquia/">IMADA Colloquium</a>, <a href="http://imada.sdu.dk/">University of Southern Denmark</a>
	  <a href="slides/2014-08-19.pdf"><img width="16" height="16" alt="pdf" src="pdf.png" /></a><br />
	  <span class="invisible"><i>16.Abr.2014</i> &bull;</span> <span class="title">Two-Layer Filters for Sorting Networks</span><br />
	  <i>16.Abr.2014</i> &bull; LabMAg Seminar, <a href="http://www.di.fc.ul.pt">Department of Informatics</a>, FCUL, Lisboa, Portugal
	  <a href="slides/2014-04-16.pdf"><img width="16" height="16" alt="pdf" src="pdf.png" /></a>
	</p>
	<div class="abstract">
	  <b>Abstract.</b> Previous work identifying depth-optimal <i>n</i>-channel sorting networks for 9&le;n&le;16 is based on exploiting symmetries of the first two layers.  However, the naive generate-and-test approach typically applied does not scale.  In this talk we revisit the problem of generating two-layer prefixes modulo symmetries. We provide an improved notion of symmetry and a novel technique based on regular languages and graph isomorphism to generate the set of non-symmetric representations.  An empirical evaluation demonstrates that the new method outperforms the generate-and-test approach by orders of magnitude and easily scales until </i>n</i>=40.
	</div>

	<p>
	  <span class="invisible"><i>15.Mar.2014</i> &bull;</span> <span class="title">Efficient Repair of Inconsistent Databases</span>
	  <a href="pubs.html#c10"><img width="16" height="16" alt="paper" src="book.png" /></a><br />
	  <span class="invisible"><i>1</i></span><i>5.Mar.2014</i> &bull; <a href="http://2014.foiks.org/">FoIKS 2014</a>, Bordeaux, France
	  <a href="slides/2014-03-05.pdf"><img width="16" height="16" alt="pdf" src="pdf.png" /></a><br />
	  <span class="invisible"><i>18.Sep.2013</i> &bull;</span> <span class="title">Optimizing the Search for Repairs from Active Integrity Constraints</span><br />
	  <i>18.Sep.2013</i> &bull; LabMAg Seminar, <a href="http://www.di.fc.ul.pt">Department of Informatics</a>, FCUL, Lisboa, Portugal
	  <a href="slides/2013-09-18.pdf"><img width="16" height="16" alt="pdf" src="pdf.png" /></a><br />
	  <i>13.Sep.2013</i> &bull; <a href="http://www.imada.sdu.dk/Events/CS_Colloquia/">IMADA Colloquium</a>, <a href="http://imada.sdu.dk/">University of Southern Denmark</a>
	  <a href="slides/2013-09-13.pdf"><img width="16" height="16" alt="pdf" src="pdf.png" /></a>
	</p>
	<div class="abstract">
	  <b>Abstract.</b> Active integrity constraints (AICs) are a form of integrity constraints for databases that not only identify inconsistencies, but also suggest how these can be overcome.  The semantics for AICs defines different types of repairs, but deciding whether an inconsistent database can be repaired and finding possible repairs is a NP- or &Sigma;<sup>P</sup><sub>2</sub>-complete problem, depending on the type of repairs one has in mind.  In order to make the search for repairs more efficient, we introduce two different relations on AICs: an equivalence relation of independence, allowing the search to be parallellized among the equivalence classes, and a precedence relation, inducing a stratification that allows repairs to be built progressively.
	</div>

	<p>
	  <span class="invisible"><i>18.Dec.2013</i> &bull;</span> <span class="title">Description Logics, Rules and Multi-Context Systems</span>
	  <a href="pubs.html#c09"><img width="16" height="16" alt="paper" src="book.png" /></a><br />
	  <i>18.Dec.2013</i> &bull; <a href="http://www.lpar-19.info/">LPAR-19</a>, Stellenbosch, South Africa
	  <a href="slides/2013-12-18.pdf"><img width="16" height="16" alt="pdf" src="pdf.png" /></a><br />
	  <i><span class="invisible">1</span>6.Dec.2013</i> &bull; LabMAg Seminar, <a href="http://www.di.fc.ul.pt">Department of Informatics</a>, FCUL, Lisboa, Portugal
	  <a href="slides/2013-12-06.pdf"><img width="16" height="16" alt="pdf" src="pdf.png" /></a>
	</p>
	<div class="abstract">
	  <b>Abstract.</b> The combination of rules and ontologies has been a fertile topic of research in the last years, with the proposal of several different systems that achieve this goal. In this talk, we look at two of these formalisms, Mdl-programs and multi-context systems, which address different aspects of this combination, and include different, incomparable programming constructs. Despite this, we show that every Mdl-program can be transformed in a multi-context system, and this transformation relates the different semantics for each paradigm in a natural way. As an application, we show how a set of design patterns for multi-context systems can be obtained from previous work on Mdl-programs.
	</div>

	<p>
	  <span class="invisible"><i>25.Jun.2013</i> &bull;</span> <span class="title">Computing Repairs from Active Integrity Constraints</span>
	  <a href="pubs.html#c07"><img width="16" height="16" alt="paper" src="book.png" /></a><br />
	  <i><span class="invisible">m</span>3.Jul.2013</i> &bull; <a href="http://www1.aston.ac.uk/eas/research/groups/csrg/events/tase13/">TASE 2013</a>, University of Birmingham, UK
	  <a href="slides/2013-07-03.pdf"><img width="16" height="16" alt="pdf" src="pdf.png" /></a><br />
	  <i>25.Jun.2013</i> &bull;  LabMAg Seminar, <a href="http://www.di.fc.ul.pt">Department of Informatics</a>, FCUL, Lisboa, Portugal
	  <a href="slides/2013-06-25.pdf"><img width="16" height="16" alt="pdf" src="pdf.png" /></a>
	</p>
	<div class="abstract">
	  <b>Abstract.</b> Repairing an inconsistent knowledge base is a well-known problem for which several solutions have been proposed and implemented in the past.  In this talk, we start by looking at databases with active integrity constraints &ndash; consistency requirements that also indicate how the database should be updated when they are not met &ndash; as introduced by Caroprese et al.  We show that the different kinds of repairs considered by those authors can be effectively computed by searching for leaves of specific kinds of trees.  Although these computations are in general not very efficient (deciding the existence of a repair for a given database with active integrity constraints is NP-complete), on average the algorithms we present make significant reductions on the number of nodes in the search tree.  Finally, these algorithms also give an operational characterization of different kinds of repairs that can be used when we extend the concept of active integrity constraints to the more general setting of knowledge bases.
	</div>

	<p>
	  <span class="invisible"><i>7.Apr.2009</i> &bull;</span> <span class="title">Services: when specification meets implementation</span><br />
	  <i>7.Apr.2009</i> &bull; Brouwer Institute Seminar Series, <a href="http://www.ru.nl/icis/">Radboud Universiteit Nijmegen</a>, The Netherlands
	  <a href="slides/2009-04-07.pdf"><img width="16" height="16" alt="pdf" src="pdf.png" /></a><br />
	  <i>1.Apr.2009</i> &bull; GLOSS Seminar, <a href="http://www.di.fc.ul.pt">Department of Informatics</a>, FCUL, Lisboa, Portugal
	  <a href="slides/2009-04-01.pdf"><img width="16" height="16" alt="pdf" src="pdf.png" /></a>
	</p>
	<div class="abstract">
	  <b>Abstract.</b> Within the Sensoria project, several approaches have been proposed to the design, modelling and implementation of service-oriented systems. These approaches stem from different motivations, different perspectives and different levels of abstraction, and have different goals in mind; however, the object of their study is the same, and as such they often share several non-trivial common features below the surface.<br />
	  This talk focuses on two languages and the concepts they share. On a higher level, SRML is a modelling language aimed at supporting the more abstract levels of design specification (&ldquo;business modelling&rdquo;). On a lower level, the Conversation Calculus models services as processes that can be analyzed using techniques from process calculus. We will show that these two approaches end up sharing a significant number of concepts, and establish a relationship between CC processes and SRML specifications that not only highlights these similarities, but also provides more powerful tools for analyzing and studying properties of these systems.
	</div>

	<p>
	  <span class="invisible"><i>19.Oct.2006</i> &bull;</span> <span class="title">Reasoning about probabilistic sequential programs</span>
	  <a href="pubs.html#j01"><img width="16" height="16" alt="paper" src="book.png" /></a><br />
	  <span class="invisible"><i>1</i></span><i>3.Nov.2006</i> &bull; <a href="http://math.ist.utl.pt/seminars/clc/">Logic and Computation Seminar</a>,
	  <a href="http://www.ist.utl.pt">Instituto Superior Técnico</a>, Lisboa, Portugal
	  <a href="slides/2006-11-03.pdf"><img width="16" height="16" alt="pdf" src="pdf.png" /></a><br />
	  <i>19.Oct.2006</i> &bull; Seminário de Lógica Matemática, Lisboa, Portugal
	  <a href="slides/2006-10-19.pdf"><img width="16" height="16" alt="pdf" src="pdf.png" /></a>
	</p>
	<div class="abstract">
	  <b>Abstract.</b> We introduce a simple programming language to develop iteration-free probabilistic sequential programs and develop a complete and decidable Hoare calculus for this programming language. In contrast to the usual approach, our state logic has truth-functional rather than arithmetical propositional connectives.
	</div>

	<p>
	  <span class="invisible"><i>2.Dec.2005</i> &bull;</span> <span class="title">First-order logic with almost-everywhere quantification</span>
	  <a href="pubs.html#j03"><img width="16" height="16" alt="paper" src="book.png" /></a><br />
	  <i>2.Dez.2005</i> &bull; <a href="http://math.ist.utl.pt/seminars/clc/">Logic and Computation Seminar</a>,
	  <a href="http://www.ist.utl.pt">Instituto Superior Técnico</a>, Lisboa, Portugal
	</p>
	<div class="abstract">
	  <b>Abstract.</b> Following recent developments in the topic of generalized quantifiers, and also having in mind subsequent applications to the area of cleistic logic, we propose a conservative enrichment of first-order logic with almost-everywhere quantification, endowed with measure-theoretic semantics.The completeness of the axiomatization we provide is carried out using a variant of the Lindenbaum-Henkin technique.The independence of the axioms is analysed, and the almost-everywhere quantifier is classified using the taxonomy proposed by Carnielli et al.
	</div>

	<p>
	  <span class="invisible"><i>18.Jul.2005</i> &bull;</span> <span class="title">Execution of Extracted Programs</span>
	  <a href="pubs.html#c05"><img width="16" height="16" alt="paper" src="book.png" /></a><br />
	  <i>18.Jul.2005</i> &bull; <a href="http://imps.mcmaster.ca/calculemus-2005/">CALCULEMUS Workshop</a>, Newcastle-upon-Tyne, United Kingdom
	  <a href="slides/2005-07-18.pdf"><img width="16" height="16" alt="pdf" src="pdf.png" /></a>
	</p>
	<div class="abstract">
	  <b>Abstract.</b> It is a well-known fact that algorithms are often hidden inside mathematical proofs. If these proofs are formalized inside a proof assistant, then a mechanism called extraction can generate the corresponding programs automatically. Previous work has focused on the difficulties in obtaining a program from a formalization of the Fundamental Theorem of Algebra inside the Coq proof assistant. In theory, this program allows one to compute approximations of roots of polynomials. However, as we show in this work, there is currently a big gap between theory and practice. We study the complexity of the extracted program and analyze the reasons of its inefficiency, showing that this is a direct consequence of the approach used throughout the formalization.
	</div>

	<p>
	  <span class="invisible"><i>13.May.2005</i> &bull;</span> <span class="title">The Essence of Proofs in Sequent Calculi</span>
	  <a href="pubs.html#tr02"><img width="16" height="16" alt="paper" src="book.png" /></a><br />
	  <span class="invisible"><i>m</i></span><i>5.Oct.2005</i> &bull; Brouwer Seminar, <a href="http://www.cs.ru.nl">Radboud University of Nijmegen</a>, Nijmegen, The Netherlands
	  <a href="slides/2005-10-05.pdf"><img width="16" height="16" alt="pdf" src="pdf.png" /></a><br />
	  <i>13.May.2005</i> &bull; <a href="http://math.ist.utl.pt/seminars/clc/">Logic and Computation Seminar</a>,
	  <a href="http://www.ist.utl.pt">Instituto Superior Técnico</a>, Lisboa, Portugal
	  <a href="slides/2005-05-13.pdf"><img width="16" height="16" alt="pdf" src="pdf.png" /></a>
	</p>
	<div class="abstract">
	  <b>Abstract.</b> Fibring is a technique for combining logics that has been extensively studied in the last decade. A simple way of fibring two sequent calculi is by combining the languages of both calculi and taking all rules allowed in either calculus. However, proofs in the fibring thus defined have no relationship to proofs in the original systems. In this talk, we propose a different definition of fibring of two sequent calculi where the notion of derivation is primitive and show that we obtain a system where proofs are essentially finite sets of proofs in the components structured in a meaningful way. As a consequence, we can show in a very easy way that fibring preserves cut elimination and decidability of the calculi.
	</div>

	<p>
	  <span class="invisible"><i>15.Sep.2004</i> &bull;</span> <span class="title">Hierarchical Reflection</span>
	  <a href="pubs.html#c03"><img width="16" height="16" alt="paper" src="book.png" /></a><br />
	  <i>15.Sep.2004</i> &bull; TPHOLs 2004, Park City, Utah, USA
	  <a href="slides/2004-09-15.pdf"><img width="16" height="16" alt="pdf" src="pdf.png" /></a><br />
	  <i>16.Feb.2004</i> &bull; Brouwer Seminar, <a href="http://www.ru.nl">University of Nijmegen</a>, The Netherlands
	  <a href="slides/2004-02-16.pdf"><img width="16" height="16" alt="pdf" src="pdf.png" /></a><br />
	  <i>16.Jan.2004</i> &bull; <a href="http://math.ist.utl.pt/seminars/clc/">Logic and Computation Seminar</a>,
	  <a href="http://www.ist.utl.pt">Instituto Superior Técnico</a>, Lisboa, Portugal
	  <a href="slides/2004-01-16.pdf"><img width="16" height="16" alt="pdf" src="pdf.png" /></a>
	</p>
	<div class="abstract">
	  <b>Abstract.</b> Reflection-based tactics are very useful in theorem proving. When doing reflection one defines a type of syntactic expressions that get interpreted in the domain of discourse. By allowing the interpretation function to be partial, one gets a more general method known as &ldquo;partial reflection&rdquo;. In this talk we show how partial reflection can be used to define a tactic for proving equalities in a field in such a way that it will also work in simpler algebraic structures, such as groups and rings.
	</div>

	<p>
	  <span class="invisible"><i>23.Jul.2004</i> &bull;</span> <span class="title">Completeness of First-Order Logic with Partial Functions</span><br />
	  <i><span class="invisible">,</span>6.Sep.2004</i> &bull; Brouwer Seminar, <a href="http://www.cs.ru.nl">Radboud University of Nijmegen</a>,  Nijmegen, The Netherlands
	  <a href="slides/2004-09-06.pdf"><img width="16" height="16" alt="pdf" src="pdf.png" /></a><br />
	  <i>23.Jul.2004</i> &bull; <a href="http://math.ist.utl.pt/seminars/clc/">Logic and Computation Seminar</a>,
	  <a href="http://www.ist.utl.pt">Instituto Superior Técnico</a>, Lisboa, Portugal
<a href="slides/2004-07-23.pdf"><img width="16" height="16" alt="pdf" src="pdf.png" /></a>
	</p>
	<div class="abstract">
	  <b>Abstract.</b> In most branches of mathematics, total functions are the exception rather than the rule. But representing partiality in formal systems like first-order logic (FOL) or type theory is quite tricky, since by their own nature these systems deal only with total objects.<br />
	  With this in mind, Wiedijk and Zwanenburg introduced an extension of FOL where functions are allowed to be partial and showed that their system was equivalent to FOL with so-called &ldquo;domain conditions&rdquo;. In this talk we look at the model theory for their system, which has some unexpected differences from the model theory for FOL, and show that the equivalence they showed also holds at the semantic level. As a consequence, we obtain completess of this system.
	</div>

	<p>
	  <span class="invisible"><i>22.Jan.2004</i> &bull;</span> <span class="title">C-CoRN: The Constructive Coq Repository at Nijmegen</span>
	  <a href="pubs.html#c04"><img width="16" height="16" alt="paper" src="book.png" /></a><br />
	  <span class="invisible"><i>m</i></span><i>9.Jul.2004</i> &bull; Dutch Proof Tools Day, Nijmegen, The Netherlands
	  <a href="slides/2004-07-09.pdf"><img width="16" height="16" alt="pdf" src="pdf.png" /></a><br />
	  <i>22.Jan.2004</i> &bull; Days in Logic, Braga, Portugal
	  <a href="slides/2004-01-22.pdf"><img width="16" height="16" alt="pdf" src="pdf.png" /></a>
	</p>
	<div class="abstract">
	  <b>Abstract.</b> At the University of Nijmegen, a large formalization of constructive mathematics has been developed in the theorem prover Coq. This formalization contains a library of constructive algebra and analysis, including results like the Fundamental Theorem of Algebra and the Fundamental Theorem of Calculus as well as the definition and basic properties of the elementary transcendental functions.<br />
	  In this talk we will present this library. We will start by discussing why formalizing mathematics is relevant, and then give an overview of the structure and contents of the library together with the methodology that is used to ensure that it remains consistent and that it can be used by other people.<br />
	  Finally some applications will be considered, with emphasis on program extraction. This will include a motivation of program extraction and presentation of what has been done within the framework of the Constructive Coq Repository at Nijmegen.
	</div>

	<p>
	  <span class="invisible"><i>15.Jun.2004</i> &bull;</span> <span class="title">Constructive Real Analysis: a Type-Theoretical Formalization and Applications</span>
	  <a href="pubs.html#w01"><img width="16" height="16" alt="paper" src="book.png" /></a><br />
	  <i>15.Jun.2004</i> &bull; Aula of the University of Nijmegen, The Netherlands
	  <a href="slides/2004-06-15.pdf"><img width="16" height="16" alt="pdf" src="pdf.png" /></a>
	</p>
	<div class="abstract">
	  <b>Abstract.</b> PhD defense.
	</div>

	<p>
	  <span class="invisible"><i>6.May.2004</i> &bull;</span> <span class="title">Representação de provas em teoria de tipos</span><br />
	  <i>6.May.2004</i> &bull; National Meeting of the Portuguese Mathematical Society, Porto, Portugal
	  <a href="slides/2004-05-06.pdf"><img width="16" height="16" alt="pdf" src="pdf.png" /></a>
	</p>
	<div class="abstract">
	  <b>Abstract.</b> O isomorfismo de Curry&ndash;Howard estabelece uma correspondência entre derivações numa lógica e termos numa teoria de tipos. A verificação do tipo de um termo é, para muitas teorias de tipos, não só um problema decidível como pode ser resolvido por algoritmos muito simples. Assim, os sistemas de tipos constituem um modo muito conveniente de representar e verificar demonstrações num computador.<br />
	  Nesta apresentação discutir-se-á o potencial de uma tal representação, não só duma perspectiva teórica mas também ilustrando as suas possíveis aplicações.
	</div>

	<p>
	  <span class="invisible"><i>30.Apr.2004</i> &bull;</span> <span class="title">A New Look at the Fundamental Theorem of Algebra</span><br />
	  <i>30.Apr.2004</i> &bull; Seminário do Centro de Álgebra da Universidade de Lisboa, Portugal
	  <a href="slides/2004-04-30.pdf"><img width="16" height="16" alt="pdf" src="pdf.png" /></a><br />
	  <i>20.Jan.2004</i> &bull; Centro de Matemática da Universidade de Coimbra, Portugal
	  <a href="slides/2004-01-20.pdf"><img width="16" height="16" alt="pdf" src="pdf.png" /></a>
	</p>
	<div class="abstract">
	  <b>Abstract.</b> In this talk we will explore one application of a constructive formalization of the Fundamental Theorem of Algebra. We begin by discussing  the theoretical and practical interest of formalizing mathematics, before a constructive proof of the FTA is presented in detail. Then we look at the algorithm implicit in this proof to focus on the problem of extracting the corresponding computer program from a computer representation of the proof.
	</div>

	<p>
	  <span class="invisible"><i>16.Mar.2004</i> &bull;</span> <span class="title">Formalizing Constructive Real Analysis in Type Theory</span>
	  <a href="pubs.html#c04"><img width="16" height="16" alt="paper" src="book.png" /></a><br />
	  <i>16.Mar.2004</i> &bull; <a href="http://www.win.tue.nl/zic/">ZIC-colloquium</a>,
	  <a href="http://www.tue.nl/"> University of Eindhoven</a>, The Netherlands
	  <a href="slides/2004-03-16.pdf"><img width="16" height="16" alt="pdf" src="pdf.png" /></a>
	</p>
	<div class="abstract">
	  <b>Abstract.</b> In this talk we present C-CoRN, the Constructive Coq Repository at Nijmegen. As its name suggests, C-CoRN is a library of formalized constructive mathematics developed in the theorem prover Coq. In what way and for what purposes such a library can be developed and used will be the main topics of the presentation.<br /> One of the basic definitions in C-CoRN is that of partial function. We  discuss and compare several different ways in which partial functions can be represented both in Coq and in other type theories. As an example of the use of this definition, we show how the usual functions of analysis (sine, exponential, logarithm) can be defined and used.<br />
	  Another aspect of C-CoRN is automation of proofs. I explain how equational reasoning can be done without user intervention and show how this hugely simplifies proofs.<br /> Finally, we pursue the possible applications of C-CoRN with an overview of program extraction and how, in theory, the formalization of the Fundamental Theorem of Algebra could be used to obtain a root-finding program. Unfortunately, as will be seen, the theory and the practice do not coincide.
	</div>

	<p>
	  <span class="invisible"><i>17.Oct.2003</i> &bull;</span> <span class="title">Program Extraction from Large Proof Developments (II)</span>
	  <a href="pubs.html#c02"><img width="16" height="16" alt="paper" src="book.png" /></a><br />
	  <i>17.Oct.2003</i> &bull; <a href="http://math.ist.utl.pt/seminars/clc/">Theory of Computation Seminar</a>,
	  <a href="http://ist.www.utl.pt">Instituto Superior Técnico</a>, Lisboa, Portugal
	  <a href="slides/2003-10-17.pdf"><img width="16" height="16" alt="pdf" src="pdf.png" /></a><br />
	  <i>13.Oct.2003</i> &bull; Grondslagen group seminar, <a href="http://www.ru.nl">University of Nijmegen</a>, The Netherlands
	  <a href="slides/2003-10-13.pdf"><img width="16" height="16" alt="pdf" src="pdf.png" /></a>
	</p>
	<div class="abstract">
	  <b>Abstract.</b> It is well known that constructive proofs of mathematical statements implicitly contain an algorithm within them. However, actually obtaining a computer program from a formalized proof can be far from straightforward. In this talk, a constructive proof of the Fundamental Theorem of Algebra will be examined as a non trivial case study. The extracted program has many surprising properties, and it will be discussed how a careful look at this program can provide interesting insights on the process of formalization.
	</div>

	<p>
	  <span class="invisible"><i>11.Sep.2003</i> &bull;</span> <span class="title">Program Extraction from Large Proof Developments</span>
	  <a href="pubs.html#c02"><img width="16" height="16" alt="paper" src="book.png" /></a><br />
	  <i>11.Sep.2003</i> &bull; TPHOLs 2003, Rome, Italy
	  <a href="slides/2003-09-11.pdf"><img width="16" height="16" alt="pdf" src="pdf.png" /></a>
	</p>
	<div class="abstract">
	  <b>Abstract.</b> <em>see the abstracts for &ldquo;Program Extraction from Large Proof Developments (I)&rdquo; and &ldquo;Program Extraction from Large Proof Developments (II)&rdquo;</em>
	</div>

	<p>
	  <span class="invisible"><i>11.Jun.2003</i> &bull;</span> <span class="title">Formalizing Mathematics in Coq: Applications</span><br />
	  <i>11.Jun.2003</i> &bull; Fields Institute Summer School, Ottawa, Canada (student presentation)
	</p>
	<div class="abstract">
	  <b>Abstract.</b> Brief overview of some problems arising from program extraction from a library of formalized mathematics in the theorem prover Coq.
	</div>

	<p>
	  <span class="invisible"><i>30.Apr.2003</i> &bull;</span> <span class="title">C-CoRN: The Constructive Coq Repository at Nijmegen</span>
	  <a href="pubs.html#c04"><img width="16" height="16" alt="paper" src="book.png" /></a><br />
	  <i>30.Apr.2003</i> &bull; <a href="http://types2003.di.unito.it/">TYPES 2003 Workshop</a>, Torino, Italy
	  <a href="slides/2003-04-30.pdf"><img width="16" height="16" alt="pdf" src="pdf.png" /></a>
	</p>
	<div class="abstract">
	  <b>Abstract.</b> We will present C-CoRN, a documented library of constructive mathematics formalized in Coq, and maintained by the Foundations group of the Computer Science Department of the University of Nijmegen. In the talk we will first present the background motivations for this activity why formalize mathematics on a computer, why work constructively, why make a big library?) Then we will describe the setup of the repository and the way it is organised: the repository is &ldquo;open&rdquo; in the sense that people can download it and are invited to contribute to it. However, we only want to add contributions that obey certain standards, which we will describe in the talk.<br />
	  Finally we will give an overview of the content of the repository as it is and the developments which we plan to do in the near future.
	</div>

	<p>
	  <span class="invisible"><i>24.Apr.2003</i> &bull;</span> <span class="title">What do we want from a documentation tool?</span><br />
	  <i>24.Apr.2003</i> &bull; Math in Coq Meeting, Orsay, France
	</p>
	<div class="abstract">
	  <b>Abstract.</b> A manifest for a documentation system for C-CoRN (and Coq).
	</div>

	<p>
	  <span class="invisible"><i>28.Mar.2003</i> &bull;</span> <span class="title">Program Extraction from Large Proof Developments (I)</span>
	  <a href="pubs.html#c02"><img width="16" height="16" alt="paper" src="book.png" /></a><br />
	  <i>28.Mar.2003</i> &bull; <a href="http://math.ist.utl.pt/seminars/clc/">Theory of Computation Seminar</a>,
	  <a href="http://www.ist.utl.pt">Instituto Superior Técnico</a>, Lisboa, Portugal
	  <a href="slides/2003-03-28.pdf"><img width="16" height="16" alt="pdf" src="pdf.png" /></a><br />
	  <i>19.Mar.2003</i> &bull; Grondslagen group seminar, <a href="http://www.ru.nl">University of Nijmegen</a>, The Netherlands
	  <a href="slides/2003-03-19.pdf"><img width="16" height="16" alt="pdf" src="pdf.png" /></a>
	</p>
	<div class="abstract">
	  <b>Abstract.</b> It is well known that mathematical proofs often contain (abstract) algorithms, but although these algorithms can be understood by a human, it still takes a lot of time and effort to implement this algorithm on a computer; moreover, one runs the risk of making mistakes in the process.<br />
	  From a fully formalized constructive proof one can in theory automatically obtain a computer implementation of such an algorithm. As an example we consider the fundamental theorem of algebra; on the first attempts to extract a program from its formalization, the computer ran out of resources.<br />
	  We will discuss how we used logical techniques to extract a feasible(!) program. This example is used as a motivation for a broader perspective on how the formalization of mathematics should be done with program extraction in mind.
	</div>

	<p>
	  <span class="invisible"><i>19.Aug.2002</i> &bull;</span> <span class="title">Formalizing Real Calculus in Coq</span>
	  <a href="pubs.html#w01"><img width="16" height="16" alt="paper" src="book.png" /></a><br />
	  <i>19.Aug.2002</i> &bull; <a href="http://www.rdg.ac.uk/FCM/">Formalizing Continuous Mathematics 2002</a> (workshop in TPHOLs 2002), Hampton, VA, USA
	  <a href="slides/2002-08-19.pdf"><img width="16" height="16" alt="pdf" src="pdf.png" /></a>
	</p>
	<div class="abstract">
	  <b>Abstract.</b> We have finished a constructive formalization in the theorem prover Coq of the Fundamental Theorem of Calculus, which states that differentiation and integration are inverse processes. This formalization is built upon the library of constructive algebra created in the FTA (Fundamental Theorem of Algebra) project, which is extended with results about the real numbers, namely about (power) series.<br />
	  Two important issues that arose in this formalization and which will be discussed in this talk are partial functions (different ways of dealing with this concept and the advantages of each different approach) and the high level tactics that were developed in parallel with the formalization (which automate several routine procedures involving results about real-valued functions).
	</div>

	<p>
	  <span class="invisible"><i>12.Jul.2002</i> &bull;</span> <span class="title">Towards the Automation of Proofs in Real Analysis</span><br />
	  <i>12.Jul.2002</i> &bull; <a href="http://math.ist.utl.pt/seminars/clc/">Theory of Computation Seminar</a>,
	  <a href="http://www.ist.utl.pt">Instituto Superior Técnico</a>, Lisboa, Portugal
	  <a href="slides/2002-07-12.pdf"><img width="16" height="16" alt="pdf" src="pdf.png" /></a>
	</p>
	<div class="abstract">
	  <b>Abstract.</b> One of the main goals of formalizing mathematics is to develop automation strategies/tactics that prove (partial) goals without requiring any input from the user. In this talk we show how to achieve this desideratum for the domain of real analysis in the proof assistant Coq, by defining ever more powerful tactics through two different strategies: the <code>Auto</code> with <code>Hints</code> mechanism and the use of Reflection.
	</div>

	<p>
	  <span class="invisible"><i>24.Apr.2002</i> &bull;</span> <span class="title">The Fundamental Theorem of Calculus in Coq</span>
	  <a href="pubs.html#w01"><img width="16" height="16" alt="paper" src="book.png" /></a><br />
	  <i>24.Apr.2002</i> &bull; TYPES 2002 Workshop, Berg en Dal, The Netherlands
	  <a href="slides/2002-04-24.pdf"><img width="16" height="16" alt="pdf" src="pdf.png" /></a>
	</p>
	<div class="abstract">
	  <b>Abstract.</b> We have finished a constructive formalization in the theorem prover Coq of the Fundamental Theorem of Calculus, which states that differentiation and integration are inverse processes.  In this formalization, we have closely followed Bishop's work [1]. In this talk, we describe the formalization in some detail, focusing on how some of Bishop's original proofs had to be refined, adapted or redone from scratch.<br />
	  [1] Bishop, E., <em>Foundations of Constructive Analysis</em>, McGraw-Hill Book Company, 1967.
	</div>

	<p>
	  <span class="invisible"><i>4.Jan.2002</i> &bull;</span> <span class="title">Formalizing Mathematics in Coq</span><br />
	  <i>4.Jan.2002</i> &bull; <a href="http://math.ist.utl.pt/seminars/clc/">Theory of Computation Seminar</a>,
	  <a href="http://www.ist.utl.pt">Instituto Superior Técnico</a>, Lisboa, Portugal
	  <a href="slides/2002-01-04.pdf"><img width="16" height="16" alt="pdf" src="pdf.png" /></a>
	</p>

	<p>
	  <span class="invisible"><i>1.Jun.2001</i> &bull;</span> <span class="title">Computational Completeness of Combinatory Algebras</span><br />
	  <i>1.Jun.2001</i> &bull; <a href="http://math.ist.utl.pt/seminars/clc/">Theory of Computation Seminar</a>,
	  <a href="http://www.ist.utl.pt">Instituto Superior Técnico</a>, Lisboa, Portugal
	  <a href="slides/2001-06-01.pdf"><img width="16" height="16" alt="pdf" src="pdf.png" /></a>
	</p>
	<div class="abstract">
	  <b>Abstract.</b> Graduation thesis presentation.
	</div>

	<p>
	  <span class="invisible"><i>24.Abr.2001</i> &bull;</span> <span class="title">Até Onde Podemos Ir?</span><br />
	  <i>24.Apr.2001</i> &bull; <a href="http://math.ist.utl.pt/seminars/diagonal/">Seminário Diagonal</a>,
	  <a href="http://www.ist.utl.pt"> Instituto Superior Técnico</a>, Lisbon, Portugal
	  <a href="slides/2001-04-24.pdf"><img width="16" height="16" alt="pdf" src="pdf.png" /></a>
	</p>
	<div class="abstract">
	  <b>Abstract.</b> Ao longo do século XX os computadores passaram de inexistentes a indispensáveis, e hoje grande parte das tarefas do dia-a-dia é por eles realizada. Mas haverá um limite para o que podem fazer? Neste seminário veremos alguns resultados clássicos da Teoria da Computação, analisando algumas das suas consequências práticas. No final discutiremos o que os novos paradigmas de computação nos trazem de novo face aos tradicionais, e o que (não) devemos esperar deles.
	</div>

	<p>
	  <span class="invisible"><i>24.Oct.2000</i> &bull;</span> <span class="title">Habilidades com Somatórios</span>
	  <a href="pubs.html#o1"><img width="16" height="16" alt="paper" src="book.png" /></a><br />
	  <i>24.Oct.2000</i> &bull; <a href="http://math.ist.utl.pt/seminars/diagonal/">Seminário Diagonal</a>,
	  <a href="http://www.ist.utl.pt">Instituto Superior Técnico</a>, Lisbon, Portugal
	  <a href="slides/2000-10-24.pdf"><img width="16" height="16" alt="pdf" src="pdf.png" /></a>
	</p>
	<div class="abstract">
	  <b>Abstract.</b> Alguns quebra-cabeças relativamente simples criam por vezes a necessidade de calcular somas pouco atraentes. Nesta apresentação introduzem-se técnicas elegantes que permitem resolver alguns somatórios sem esforço recorrendo, nomeadamente, à introdução de uma notação diferente da habitual.<br />
	  No final, dar-se-ão pistas no sentido de resolver somatórios por métodos análogos aos utilizados na Teoria da Integração.
	</div>
      </div>
      </div>

    <?php make_footer("RESEARCH","ENGLISH"); ?>
  </body>
</html>
