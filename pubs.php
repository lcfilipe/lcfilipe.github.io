<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<?php include("basic.php"); ?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <link type="text/css" rel="stylesheet" href="lcf.css" />
    <script type="text/javascript" src="pubs.js"></script>
    <title>Luís Cruz-Filipe: Publications</title>
  </head>
  <body>
    <div class="titlebar">
      <h1>Publications</h1>
    </div>

    <div class="middle">
      <div class="main">
	<p>Below is a list of my publications, separated by type and within each type in inverse chronological order. Most of them can be downloaded in PDF format; you can also download the BiBTeX reference in case you want to cite it. I also include a selection of submitted publications.<br />
	  Use the drop-down menu below to view only publications pertaining to a particular topic, or of a particular type.</p>

        <p>
	  <i style="font-size:larger">Topic: </i>
          <select name="tipo" onchange="update(this.value)">
	    <option value="all">- all publications -</option>
	    <option value="thm">Theorem Proving</option>
	    <option value="proofs">Large-Scale Proofs</option>
	    <option value="sn">Sorting Networks</option>
	    <option value="chor">Choreographic Programming</option>
	    <option value="procs">Process Calculi</option>
	    <option value="aic">Active Integrity Constraints</option>
	    <option value="logic">Logic</option>
	    <option value="kr">Knowledge Representation</option>
	    <option value="other">Others</option>
	    <option value="all">- by type -</option>
	    <option value="book">Book chapters</option>
	    <option value="journal">Journal publications</option>
	    <option value="conf">Conference proceedings</option>
	    <option value="workshop">Workshop proceedings</option>
          </select>
          </p>

	<h4>Journal publications</h4>

	<div class="pub" id="j20"><p>
	    <span class="numero">[20]</span>Can't you answer while you wait? (with <a href="http://www.di.fc.ul.pt/~gg/">G.&nbsp;Gaspar</a> and <a href="http://www.di.fc.ul.pt/~in/">I.&nbsp;Nunes</a>)
	    <a href="pubs/j20.pdf"><img width="16" height="16" alt="pdf" src="pdf.png" /></a>
	    <a href="pubs/j20.bib"><img width="26" height="16" alt="BiBTeX" src="bibtex.png" /></a><br />
	    in <i>Annals of Mathematics and Artificial Intelligence</i>, accepted for publication.<!--<b>83</b>(3-4):213-246. Springer, August 2018.<br />
	    <span class="doi">DOI 10.1145/3688845</span>--></p>
	  <div class="abstract">
	    <b>Abstract.</b> Many modern-day systems rely on information that is constantly arriving, and they need to make decisions based on it &ndash; a problem known as <i>continuous query answering</i>. In many situations, these systems can benefit from identifying possible outcomes that are consistent with the data available so far. Such scenarios are called hypothetical answers, and previous work has defined them precisely and shown how they can be updated in step with the arrival of additional input.<br />
	    Most existing formalisms assume that data always arrives instantaneously, which is not realistic. In this work, we relax this problem by allowing data to arrive later, and potentially out of order. By revisiting the underlying intuitions in previous work, we develop a more general framework that supports communication delays. The interaction between communication delays and negation poses some challenging problems, which we address using fixpoint theory. We show that the relevant fixpoints can be computed in finite time by a carefully designed algorithm.</div>
	</div>

	<div class="pub" id="j19"><p>
	    <span class="numero">[19]</span>Hypothetical Answers to Continuous Queries over Data Streams (with <a href="http://www.di.fc.ul.pt/~gg/">G.&nbsp;Gaspar</a> and <a href="http://www.di.fc.ul.pt/~in/">I.&nbsp;Nunes</a>)
	    <a href="pubs/j19.pdf"><img width="16" height="16" alt="pdf" src="pdf.png" /></a>
	    <a href="pubs/j19.bib"><img width="26" height="16" alt="BiBTeX" src="bibtex.png" /></a><br />
  	    in <em>ACM Transactions on Computational Logic</em>, <b>25</b>(4):1-40. ACM, December 2024.<br />
	    <span class="doi">DOI 10.1145/3688845</span></p>
	  <div class="abstract">
	    <b>Abstract.</b> Answers to continuous queries over data streams are often delayed until some relevant input arrives through the data stream. These delays may turn answers, when they arrive, obsolete to users who sometimes have to make decisions with no help whatsoever. Therefore, it can be useful to provide hypothetical answers &ndash; &ldquo;given the current information, it is possible that <i>X</i> will become true at time <i>t</i>&rdquo; &ndash; instead of no information at all.<br />
	    In this work we present a semantics for queries and corresponding answers that covers such hypothetical answers, together with an incremental online algorithm for updating the set of facts that are consistent with the currently available information. Our framework also works in a language supporting negation.</div>
	</div>

	<div class="pub" id="j18"><p>
	    <span class="numero">[18]</span>µXL: Explainable Lead Generation with Microservices and Hypothetical Answers (with S.&nbsp;Kostopoulou, <a href="http://www.fabriziomontesi.com/">F.&nbsp;Montesi</a> and J.&nbsp;Vistrup),
	    <a href="http://link.springer.com/article/10.1007/s00607-024-01321-x">&copy; Springer</a>
	    <a href="pubs/j18.pdf"><img width="16" height="16" alt="pdf" src="pdf.png" /></a>
	    <a href="pubs/j18.bib"><img width="26" height="16" alt="BiBTeX" src="bibtex.png" /></a><br />
	    in <em>Computing</em>, <b>106</b>(11):3419-3445. Springer, July 2024.<br />
	    <span class="doi">DOI 10.1007/s00607-024-01321-x</span></p>
	  <div class="abstract">
	    <b>Abstract.</b> Lead generation refers to the identification of potential topics (the &lsquo;leads&rdquo;) of importance for journalists to report on. In this article we present µXL, a new lead generation tool based on a microservice architecture that includes a component of explainable AI. µXL collects and stores historical and real-time data from web sources, like Google Trends, and generates current and future leads. Leads are produced by a novel engine for hypothetical reasoning based on temporal logical rules, which can identify propositions that may hold depending on the outcomes of future events. This engine also supports additional features that are relevant for lead generation, such as user-defined predicates (allowing useful custom atomic propositions to be defined as Java functions) and negation (needed to specify and reason about leads characterized by the absence of specific properties). Our microservice architecture is designed using state-of-the-art methods and tools for API design and implementation, namely API patterns and the Jolie programming language. Thus, our development provides an additional validation of their usefulness in a new application domain (journalism). We also carry out an empirical evaluation of our tool.</div>
	</div>

	<div class="pub" id="j17"><p>
	    <span class="numero">[17]</span>A Formal Theory of Choreographic Programming (with <a href="http://www.fabriziomontesi.com/">F.&nbsp;Montesi</a> and M.&nbsp;Peressotti),
	    <a href="http://link.springer.com/article/10.1007/s10817-023-09665-3">&copy; Springer</a>
	    <a href="pubs/j17.pdf"><img width="16" height="16" alt="pdf" src="pdf.png" /></a>
	    <a href="pubs/j17.bib"><img width="26" height="16" alt="BiBTeX" src="bibtex.png" /></a><br />
	    in <em>Journal of Automated Reasoning</em>, <b>67</b>(2):21:1-21:34. Springer, May 2023.<br />
	    <span class="doi">DOI 10.1007/s10817-023-09665-3</span></p>
	  <div class="abstract">
	    <b>Abstract.</b> Choreographic programming is a paradigm for writing coordination plans for distributed systems from a global point of view, from which correct-by-construction decentralised implementations can be generated automatically. Theory of choreographies typically includes a number of complex results that are proved by structural induction. The high number of cases and the subtle details in some of these proofs has led to important errors being found in published works.<br />
	    In this work, we formalise the theory of a choreographic programming language in Coq. Our development includes the basic properties of this language, a proof of its Turing completeness, a compilation procedure to a process language, and an operational characterisation of the correctness of this procedure.<br />
	    Our formalisation experience illustrates the benefits of using a theorem prover: we get both an additional degree of confidence from the mechanised proof, and a significant simplification of the underlying theory. Our results offer a foundation for the future formal development of choreographic languages.</div>
	</div>

	<div class="pub" id="j16"><p>
	    <span class="numero">[16]</span>Stratification Approximation Fixpoint Theory and Its Application to Active Integrity Constraints (with <a href="http://bartbogaerts.eu/index.php">B.&nbsp;Bogaerts</a>)
	    <a href="pubs/j16.pdf"><img width="16" height="16" alt="pdf" src="pdf.png" /></a>
	    <a href="pubs/j16.bib"><img width="26" height="16" alt="BiBTeX" src="bibtex.png" /></a><br />
  	    in <em>ACM Transactions on Computational Logic</em>, <b>22</b>(1):6:1-6:19. ACM, January 2021.<br />
	    <span class="doi">DOI 10.1145/3430750</span></p>
	  <div class="abstract">
	    <b>Abstract.</b> Approximation fixpoint theory (AFT) is an algebraic study of fixpoints of lattice operators that unifies various knowledge representation formalisms. In AFT, stratification of operators has been studied, essentially resulting in a theory that specifies when certain types of fixpoints can be computed stratum per stratum. Recently, novel types of fixpoints related to <i>groundedness</i> have been introduced in AFT. In this paper, we study how those fixpoints behave under stratified operators.<br />
	    One recent application domain of AFT is the field of <i>active integrity constraints</i> (AICs). We apply our extended stratification theory to AICs and find that existing notions of stratification in AICs are covered by this general algebraic definition of stratification. As a result, we obtain stratification results for a large variety of semantics for AICs.</div>
        </div>

	<div class="pub" id="j15"><p>
	    <span class="numero">[15]</span>A Core Model for Choreographic Programming (with <a href="http://www.fabriziomontesi.com/">F.&nbsp;Montesi</a>)
	    <a href="pubs/j15.pdf"><img width="16" height="16" alt="pdf" src="pdf.png" /></a>
	    <a href="pubs/j15.bib"><img width="26" height="16" alt="BiBTeX" src="bibtex.png" /></a><br />
	    in <em>Theoretical Computer Science</em>, <b>802</b>:38-66. Elsevier, January 2020.<br />
	    <span class="doi">DOI 10.1016/j.tcs.2019.07.005</span></p>
	  <div class="abstract">
	    <b>Abstract.</b> Choreographic Programming is a paradigm for developing concurrent programs that are deadlock-free by construction, by programming communications declaratively and then synthesising process implementations automatically. Despite strong interest on choreographies, a foundational model that explains which computations can be performed with the hallmark constructs of choreographies is still missing.<br />
	    In this work, we introduce Core Choreographies (CC), a model that includes only the core primitives of choreographic programming. Every computable function can be implemented as a choreography in CC, from which we can synthesise a process implementation where independent computations run in parallel. We discuss the design of CC and argue that it constitutes a canonical model for choreographic programming.</div>
        </div>

	<div class="pub" id="j14"><p>
	    <span class="numero">[14]</span>Formally Verifying the Solution to the Pythagorean Triples Problem (with J.&nbsp;Marques-Silva and <a href="http://imada.sdu.dk/~petersk/">P.&nbsp;Schneider-Kamp</a>),
	    <a href="http://link.springer.com/article/10.1007/s10817-018-9490-4">&copy; Springer</a>
	    <a href="pubs/j14.pdf"><img width="16" height="16" alt="pdf" src="pdf.png" /></a>
	    <a href="pubs/j14.bib"><img width="26" height="16" alt="BiBTeX" src="bibtex.png" /></a><br />
	    in <em>Journal of Automated Reasoning</em>, <b>63</b>(3):695-722. Springer, October 2019.<br />
	    <span class="doi">DOI 10.1007/s10817-018-9490-4</span></p>
	  <div class="abstract">
	    <b>Abstract.</b> The Boolean Pythagorean Triples problem asks: does there exist a binary coloring of the natural numbers such that every Pythagorean triple contains an element of each color? This problem was first solved in 2016, when Heule, Kullmann and Marek encoded a finite restriction of this problem as a propositional formula and showed its unsatisfiability. In this work we formalize their development in the theorem prover Coq. We state the Boolean Pythagorean Triples problem in Coq, define its encoding as a propositional formula and establish the relation between solutions to the problem and satisfying assignments to the formula. We verify Heule <i>et al.</i>'s proof by showing that the symmetry breaks they introduced to simplify the propositional formula are sound, and by implementing a correct-by-construction checker for proofs of unsatisfiability based on reverse unit propagation.</div>
        </div>
	
	<div class="pub" id="j13"><p>
	    <span class="numero">[13]</span>Sorting Networks: to the End and Back Again (with <a href="http://www.cs.bgu.ac.il/~mcodish/">M.&nbsp;Codish</a>, T.&nbsp;Ehlers, M.&nbsp;M&uuml;ller and <a href="http://imada.sdu.dk/~petersk/">P.&nbsp;Schneider-Kamp</a>)
	    <a href="pubs/j13.pdf"><img width="16" height="16" alt="pdf" src="pdf.png" /></a>
	    <a href="pubs/j13.bib"><img width="26" height="16" alt="BiBTeX" src="bibtex.png" /></a><br />
	    in <i>Journal of Computer and System Sciences</i>, <b>104</b>:184-201. Elsevier, September 2019.<br />
	    <span class="doi">DOI 10.1016/j.jcss.2016.04.004</span></p>
	  <div class="abstract">
	    <b>Abstract.</b> New properties of the front and back ends of sorting networks are studied, illustrating their utility when searching for bounds on optimal networks.  Search focuses first on the &ldquo;out-sides&rdquo; of the network and then on the inner part.  Previous works focused on properties of the front end to break symmetries in the search.  The new, out-side-in, properties shed understanding on how sorting networks sort, and facilitate the computation of new bounds on optimality.  We present new, faster, parallel sorting networks for 17&ndash;20 inputs.  For 17 inputs, we show that no sorting network using less layers exists.
	  </div>
	</div>

	<div class="pub" id="j12"><p>
	    <span class="numero">[12]</span>Active Integrity Constraints for General-Purpose Knowledge Bases (with <a href="http://www.di.fc.ul.pt/~gg/">G.&nbsp;Gaspar</a>, <a href="http://www.di.fc.ul.pt/~in/">I.&nbsp;Nunes</a> and <a href="http://imada.sdu.dk/~petersk/">P.&nbsp;Schneider-Kamp</a>),
	    <a href="https://link.springer.com/article/10.1007/s10472-018-9577-y">&copy; Springer</a>
	    <a href="pubs/j12.pdf"><img width="16" height="16" alt="pdf" src="pdf.png" /></a>
	    <a href="pubs/j12.bib"><img width="26" height="16" alt="BiBTeX" src="bibtex.png" /></a><br />
	    in <i>Annals of Mathematics and Artificial Intelligence</i>, <b>83</b>(3-4):213-246. Springer, August 2018.<br />
	    <span class="doi">DOI 10.1007/s10472-018-9577-y</span></p>
	  <div class="abstract">
	    <b>Abstract.</b> In the database world, <i>integrity constraints</i> are essential to guarantee database integrity.  The related problem of database repair deals with finding the best way to change a database so that it satisfies its integrity constraints.  These two topics have been studied intensively since the 1980s.  The formalism of <i>active integrity constraints</i>, proposed in 2004, aims at addressing them jointly, by providing a syntax whereby a particular subclass of integrity constraints can be specified together with preferred ways to repair inconsistency.<br />  
	    In the last decade, several authors have proposed adaptations of the notion of integrity constraints to other reasoning frameworks than relational databases.  In this article, we extend this line of work in two ways.  First, we target multi-context systems, a general-purpose framework for combining heterogeneous reasoning systems, able to model most other reasoning frameworks, as we demonstrate.  Second, we extend the notions of active integrity constraints and grounded repairs to this generalized setting.  This way of including repair suggestions inside integrity constraints, subject to a validity check, enables us to define simple iterative algorithms to find all possible grounded repairs for an inconsistent multi-context system, avoiding the need to solve complex or undecidable problems.</div>
        </div>

	<div class="pub" id="j11"><p>
	    <span class="numero">[11]</span>Fixpoint Semantics for Active Integrity Constraints (with <a href="http://bartbogaerts.eu/index.php">B.&nbsp;Bogaerts</a>)
	    <a href="pubs/j11.pdf"><img width="16" height="16" alt="pdf" src="pdf.png" /></a>
	    <a href="pubs/j11.bib"><img width="26" height="16" alt="BiBTeX" src="bibtex.png" /></a><br />
	    in <em>Artificial Intelligence</em>, <b>255</b>:43-70. Elsevier, February 2018.<br />
	    <span class="doi ">DOI 10.1016/j.artint.2017.11.003</span></p>
	  <div class="abstract">
	    <b>Abstract.</b> Active integrity constraints (AICs) constitute a formalism to associate with a database not just the constraints it should adhere to, but also how to fix the database in case one or more of these constraints are violated. The intuitions regarding which repairs are &ldquo;good&rdquo; given such a description are closely related to intuitions that live in various areas of non-monotonic reasoning, such as logic programming and autoepistemic logic.<br />
	    In this paper, we apply <i>approximation fixpoint theory</i>, an abstract, algebraic framework designed to unify semantics of non-monotonic logics, to the field of AICs. This results in a new family of semantics for AICs. We study properties of our new semantics and relationships to existing semantics. In particular, we argue that two of the newly defined semantics stand out. <i>Grounded repairs</i> have a simple definition that is purely based on semantic principles that semantics for AICs should adhere to. And, as we show, they coincide with the intended interpretation of AICs on many examples. The second semantics of interest is the AFT-well-founded semantics: it is a computationally cheap semantics that provides upper- and lower bounds for many other classes of repairs.</div>
        </div>

	<div class="pub" id="j10"><p>
	    <span class="numero">[10]</span>Formally Proving Size Optimality of Sorting Networks (with <a href="http://imada.sdu.dk/~kslarsen/">K.S.&nbsp;Larsen</a> and <a href="http://imada.sdu.dk/~petersk/">P.&nbsp;Schneider-Kamp</a>),
	    <a href="http://link.springer.com/article/10.1007/s10817-017-9405-9">&copy; Springer</a>
	    <a href="pubs/j10.pdf"><img width="16" height="16" alt="pdf" src="pdf.png" /></a>
	    <a href="pubs/j10.bib"><img width="26" height="16" alt="BiBTeX" src="bibtex.png" /></a><br />
	    in <em>Journal of Automated Reasoning</em>, <b>59</b>(4):425-454. Springer, December 2017.<br />
	    <span class="doi">DOI 10.1007/s10817-017-9405-9</span></p>
	  <div class="abstract">
	    <b>Abstract.</b> Recent successes in formally verifying increasingly larger computer-generated proofs have relied extensively on (a) using oracles, to find answers for recurring subproblems efficiently, and (b) extracting formally verified checkers, to perform exhaustive case analysis in feasible time.<br />
	    In this work we present a formal verification of optimality of sorting networks on up to 9 inputs, making it one of the largest computer-generated proofs that has been formally verified.  We show that an adequate pre-processing of the information provided by the oracle is essential for feasibility, as it improves the time required by our extracted checker by several orders of magnitude.</div>
        </div>

	<div class="pub" id="j09"><p>
	    <span class="numero">[9]</span>Optimizing Sorting Algorithms by Using Sorting Networks (with <a href="http://www.cs.bgu.ac.il/~mcodish/">M.&nbsp;Codish</a>, M.&nbsp;Nebel and <a href="http://imada.sdu.dk/~petersk/">P.&nbsp;Schneider-Kamp</a>),
	    <a href="http://link.springer.com/article/10.1007/s00165-016-0401-3">&copy; Springer</a>
	    <a href="pubs/j09.pdf"><img width="16" height="16" alt="pdf" src="pdf.png" /></a>
	    <a href="pubs/j09.bib"><img width="26" height="16" alt="BiBTeX" src="bibtex.png" /></a><br />
	    in <em>Formal Aspects of Computing</em>, <b>29</b>(3):559-579. Springer, May 2017.<br />
	    <span class="doi">DOI 10.1007/s00165-016-0401-3</span></p>
	  <div class="abstract">
	    <b>Abstract.</b> In this paper, we show how the theory of sorting networks can be applied to synthesize optimized general-purpose sorting libraries.  Standard sorting libraries are often based on combinations of the classic Quicksort algorithm, with insertion sort applied as base case for small, fixed, numbers of inputs.  Unrolling the code for the base case by ignoring loop conditions eliminates branching, resulting in code equivalent to a sorting network.  By replacing it with faster sorting networks, we can improve the performance of these algorithms.  We show that by considering the number of comparisons and swaps alone we are not able to predict any real advantage of this approach.  However, significant speed-ups are obtained when taking advantage of instruction level parallelism and non-branching conditional assignment instructions, both of which are common in modern CPU architectures.  Furthermore, a close control of how often registers have to be spilled to memory gives us a complete explanation of the performance of different sorting networks, allowing us to choose an optimal one for each particular architecture.  Our experimental results show that using code synthesized from these efficient sorting networks as the base case for Quicksort libraries results in significant real-world speed-ups.
	  </div>
	</div>

	<div class="pub" id="j08"><p>
	    <span class="numero">[8]</span>From Description-Logic Programs to Multi-Context Systems (with <a href="http://www.di.fc.ul.pt/~gg/">G.&nbsp;Gaspar</a> and <a href="http://www.di.fc.ul.pt/~in/">I.&nbsp;Nunes</a>)
	    <a href="pubs/j08.pdf"><img width="16" height="16" alt="pdf" src="pdf.png" /></a>
	    <a href="pubs/j08.bib"><img width="26" height="16" alt="BiBTeX" src="bibtex.png" /></a><br />
	    <i>Journal of Logical and Algebraic Methods in Programming</i>, <b>88</b>:26-44. Elsevier, April 2017.<br />
	    <span class="doi">DOI 10.1016/j.jlamp.2017.01.005</span></p>
	  <div class="abstract">
	    <b>Abstract.</b> The combination of logic program-style rules with other reasoning systems has been a fertile topic of research in the last years, with the proposal of several different systems that achieve this goal.  In this work, we look at two of these systems, dl-programs and multi-context systems, which address different aspects of this combination, and include different, incomparable programming constructs.  We prove that every dl-program can be transformed into a multi-context system in such a way that the different semantics for each paradigm are naturally related.  As a consequence, constructions developed for dl-programs can be automatically ported to multi-context systems.  In particular, we show how to model default rules over ontologies with the usual semantics.
</div>
        </div>

	<div class="pub" id="j07"><p>
	    <span class="numero">[7]</span>Optimal-Depth Sorting Networks (with D.&nbsp;Bundala, <a href="http://www.cs.bgu.ac.il/~mcodish/">M.&nbsp;Codish</a>, <a href="http://imada.sdu.dk/~petersk/">P.&nbsp;Schneider-Kamp</a> and J.&nbsp;Závodný)
	    <a href="pubs/j07.pdf"><img width="16" height="16" alt="pdf" src="pdf.png" /></a>
	    <a href="pubs/j07.bib"><img width="26" height="16" alt="BiBTeX" src="bibtex.png" /></a><br />
	    <i>Journal of Computer and System Sciences</i>, <b>84</b>:185-204. Elsevier, March 2017.<br />
	    <span class="doi">DOI 10.1016/j.jcss.2016.09.004</span></p>
	  <div class="abstract">
	    <b>Abstract.</b> We solve a 40-year-old open problem on the depth optimality of sorting networks. In 1973, Donald E.&nbsp;Knuth detailed, in Volume&nbsp;3 of <i>The Art of Computer Programming</i>, sorting networks of the smallest depth known at the time for <i>n</i>&leq;16 inputs, quoting optimality for <i>n</i>&leq;8. In 1989, Parberry proved the optimality of the networks with 9&leq;<i>n</i>&leq;10 inputs. In this article, we present a general technique for obtaining such optimality results, and use it to prove the optimality of the remaining open cases of 11&leq;<i>n</i>&leq;16 inputs. We show how to exploit symmetry to construct a small set of two-layer networks on <i>n</i> inputs such that if there is a sorting network on <i>n</i> inputs of a given depth, then there is one whose first layers are in this set. For each network in the resulting set, we construct a propositional formula whose satisfiability is necessary for the existence of a sorting network of a given depth. Using an off-the-shelf SAT solver we show that the sorting networks listed by Knuth are optimal. For <i>n</i>&leq;10 inputs, our algorithm is orders of magnitude faster than the prior ones.
	  </div>
	</div>

	<div class="pub" id="j06"><p>
	    <span class="numero">[6]</span>Sorting Nine Inputs Requires Twenty-Five Comparisons (with <a href="http://www.cs.bgu.ac.il/~mcodish/">M.&nbsp;Codish</a>, M.&nbsp;Frank and <a href="http://imada.sdu.dk/~petersk/">P.&nbsp;Schneider-Kamp</a>)
	    <a href="pubs/j06.pdf"><img width="16" height="16" alt="pdf" src="pdf.png" /></a>
	    <a href="pubs/j06.bib"><img width="26" height="16" alt="BiBTeX" src="bibtex.png" /></a><br />
	    <i>Journal of Computer and System Sciences</i>, <b>82</b>(3):551-563. Elsevier, May 2016.<br />
	    <span class="doi">DOI 10.1016/j.jcss.2015.11.014</span></p>
	  <div class="abstract">
	    <b>Abstract.</b> This paper describes a computer-assisted non-existence proof of 9-input sorting networks consisting of 24 comparators, hence showing that the 25-comparator sorting network found by Floyd in 1964 is optimal. As a corollary, the 29-comparator network found by Waksman in 1969 is optimal when sorting 10 inputs.<br />
	    This closes the two smallest open instances of the optimal-size sorting network problem, which have been open since the results of Floyd and Knuth from 1966 proving optimality for sorting networks of up to 8 inputs.
	  </div>
	</div>

	<div class="pub" id="j05"><p>
	    <span class="numero">[5]</span>The Finitistic Consistency of Heck's Predicative Fregean System (with <a href="http://www.ciul.ul.pt/~ferferr/">F.&nbsp;Ferreira</a>)
	    <a href="pubs/j05.pdf"><img width="16" height="16" alt="pdf" src="pdf.png" /></a>
	    <a href="pubs/j05.bib"><img width="26" height="17" alt="BiBTeX" src="bibtex.png" /></a><br />
	    <em>Notre Dame Journal of Formal Logic</em>, <b>56</b>(1):61-79, 2015.<br />
	    <span class="doi">DOI 10.1215/00294527-2835110</span></p>
	  <div class="abstract">
	    <b>Abstract.</b> Frege's theory is inconsistent (Russell's paradox). However, the predicative version of Frege's system is consistent. This was proved by Richard Heck in 1996 using a model theoretic argument. In this paper, we give a finitistic proof of this consistency result. As a consequence, Heck's predicative theory is rather weak (as was suspected). We also prove the finitistic consistency of the extension of Heck's theory to &Delta;<sup>1</sup><sub>1</sub>-comprehension and of Heck's ramified predicative second-order system.
	  </div>
	</div>

	<div class="pub" id="j04"><p>
	    <span class="numero">[4]</span>The Stream-based Service-Centered Calculus: a Foundation for Service-Oriented Programming (with <a href="http://www.cs.unibo.it/~lanese/">I.&nbsp;Lanese</a>, <a href="http://www.di.fc.ul.pt/~fmartins/">F.&nbsp;Martins</a>, <a href="http://ctp.di.fct.unl.pt/~aravara/">A.&nbsp;Ravara</a>, and <a href="http://www.di.fc.ul.pt/~vv/">V.&nbsp;Vasconcelos</a>),
	    <a href="http://link.springer.com/article/10.1007/s00165-013-0284-5">&copy; Springer</a>
	    <a href="pubs/j04.pdf"><img width="16" height="16" alt="pdf" src="pdf.png" /></a>
	    <a href="pubs/j04.bib"><img width="26" height="16" alt="BiBTeX" src="bibtex.png" /></a><br />
	    in <em>Formal Aspects of Computing</em>, <b>26</b>:865-918. Springer, September 2014.<br />
	    <span class="doi">DOI 10.1007/s00165-013-0284-5</span></p>
	  <div class="abstract">
	    <img src="pubs/badgeACM2014.jpg" width="144" height="144" style="float:left; padding:10px" />
	    <b>Abstract.</b> We give a formal account of SSCC, a calculus for modeling service-based systems, suitable to describe both service composition (orchestration) and the protocols that services follow when invoked (conversation). The calculus includes primitives for defining and invoking services, for isolating conversations (called sessions) among clients and servers, and for orchestrating services. The calculus is equipped with a reduction and a labeled transition semantics related by an equivalence result.<br />
	    SSCC provides a good trade-off between expressive power for modeling and simplicity for analysis. We assess the expressive power by modeling van der Aalst workflow patterns and an automotive case study from the European project Sensoria. For analysis, we present a simple type system ensuring compatibility of client and service protocols. We also study the behavioral theory of the calculus, highlighting some axioms that capture the behavior of the different primitives.<br />
	    As a final application of the theory, we define and prove correct some program transformations. These allow to start modeling a system from a typical UML Sequence Diagram, and then transform the specification to match the service-oriented programming style, thus simplifying its implementation using web services technology.
	  </div>
	  <ul><li>Included as a <i>Notable Article in Computing</i> in Computing Reviews' <a href="http://www.computingreviews.com/recommend/bestof/notableitems.cfm?bestYear=2014">19th Annual Best of Computing</a> list.</li></ul>
	</div>

	<div class="pub" id="j03"><p>
	    <span class="numero">[3]</span>Complete Axiomatization of Discrete-Measure Almost-Everywhere Quantification (with <a href="http://sqig.math.ist.utl.pt/jfr/">J.&nbsp;Rasga</a>, <a href="http://sqig.math.ist.utl.pt/acs/">A.&nbsp;Sernadas</a> and <a href="http://sqig.math.ist.utl.pt/css/">C.&nbsp;Sernadas</a>)
	    <a href="pubs/j03.pdf"><img width="16" height="16" alt="pdf" src="pdf.png" /></a>
	    <a href="pubs/j03.bib"><img width="26" height="16" alt="BiBTeX" src="bibtex.png" /></a><br />
	    in <i>Journal of Logic and Computation</i>, <b>18</b>(6):885-911. Oxford University Press, April 2008.<br />
            <span class="doi">DOI 10.1093/logcom/exn014</span></p>
	  <div class="abstract">
	    <b>Abstract.</b> Following recent developments in the topic of generalized quantifiers, and also having in mind applications in the areas of security and artificial intelligence, a conservative enrichment of (two-sorted) first-order logic with almost-everywhere quantification is proposed. The completeness of the axiomatization against the measure-theoretic semantics is carried out using a variant of the Lindenbaum&ndash;Henkin technique. The independence of the axioms is analyzed, and the almost-everywhere quantifier is compared with related notions of generalized quantification.
	  </div>
	</div>

	<div class="pub" id="j02"><p>
	    <span class="numero">[2]</span>Heterogeneous Fibring of Deductive Systems via Abstract Proof Systems (with <a href="http://sqig.math.ist.utl.pt/acs/">A.&nbsp;Sernadas</a> and <a href="http://sqig.math.ist.utl.pt/css/">C.&nbsp;Sernadas</a>)
	    <a href="pubs/j02.pdf"><img width="16" height="16" alt="pdf" src="pdf.png" /></a>
	    <a href="pubs/j02.bib"><img width="26" height="16" alt="BiBTeX" src="bibtex.png" /></a><br />
	    in <i>Logic Journal of the IGPL</i>, <b>16</b>(2):121-153. Oxford University Press, April 2008.<br />
	    <span class="doi">DOI 10.1093/jigpal/jzm057</span></p>
	  <div class="abstract">
	    <b>Abstract.</b> Homogeneous fibring is a meta-logical constructor that produces new logics by combining logics presented in the same way (e.g. both of them endowed with an Hilbert calculus). Heterogeneous fibring (e.g.&nbsp;one of the logics is presented by an Hilbert calculus and the other by a sequent calculus) is an open problem that we solve now. We start by considering consequence systems as providing a solution (a good one when fibring a logic presented by semantic means and another one presented in a deductive way). However consequence systems are not good when we want to obtain as the result of fibring two deductive systems still a deductive system (where a notion of derivation appears in the fibring). The solution is to introduce the concept of (abstract) proof system. The fibring of proof systems is still a proof system and so we have that a derivation in the fibring is obtained from the derivations of the component. Some preservation results are discussed like compactness and semi-decidability.
	  </div>
	</div>

	<div class="pub" id="j01"><p>
	    <span class="numero">[1]</span>Reasoning about Probabilistic Sequential Programs (with <a href="http://engineering.missouri.edu/person/chadha-rohit/">R.&nbsp;Chadha</a>, <a href="http://sqig.math.ist.utl.pt/pmat/">P.&nbsp;Mateus</a> and <a href="http://sqig.math.ist.utl.pt/acs/">A.&nbsp;Sernadas</a>)
	    <a href="pubs/j01.pdf"><img width="16" height="16" alt="pdf" src="pdf.png" /></a>
	    <a href="pubs/j01.bib"><img width="26" height="16" alt="BiBTeX" src="bibtex.png" /></a><br />
	    in <i>Theoretical Computer Science</i>, <b>379</b>(1-2):142-165. Elsevier, June 2007.<br />
	    <span class="doi">DOI 10.1016/j.tcs.2007.02.040</span></p>
	  <div class="abstract">
	    <b>Abstract.</b> A complete and decidable Hoare-style calculus for iteration-free probabilistic sequential programs is presented using a state logic with truth-functional propositional (not arithmetical) connectives.
	  </div>
	</div>

	<h4>Peer-reviewed articles in international conferences</h4>

	<div class="pub" id="c52"><p>
	    <span class="numero">[52]</span>Minimizing Sorting Networks at the Sub-Comparator Level (with <a href="http://imada.sdu.dk/~petersk/">P.&nbsp;Schneider-Kamp</a>)
	    <a href="pubs/c52.pdf"><img width="16" height="16" alt="pdf" src="pdf.png" /></a>
	    <a href="pubs/c52.bib"><img width="26" height="16" alt="BiBTeX" src="bibtex.png" /></a><br />
	    in N.&nbsp;Bjørner, M.&nbsp;Heule and A.&nbsp;Voronkov (eds.), <i>Proceedings of LPAR-25</i>,
	    EPiC Series in Computing <b>100</b>:36-50. EasyChair Publications, June 2024.<br />
	    <span class="doi">DOI 10.29007/LZKS</span></p>
	  <div class="abstract">
	    <b>Abstract.</b> Sorting networks are sorting algorithms that execute a sequence of operations independently of the input. Since they can be implemented directly as circuits, sorting networks are easy to implement in hardware &ndash; but they are also used often in software to improve performance of base cases of standard recursive sorting algorithms. For this purpose, they are translated into machine-code instructions in a systematic way.<br />
	    Recently, a deep-learning system discovered better implementations than previously known of some sorting networks with up to 8 inputs. In this article, we show that all these examples are instances of a general pattern whereby some instructions are removed. We show that this removal can be done when a particular set of constraints on integers is satisfiable, and identify conditions where we can reduce this problem to propositional satisfiability. We systematically apply this general construction to improve the best-known implementations of sorting networks of size up to 128, which are the ones most commonly found in software implementations.</div>
	</div>

	<div class="pub" id="c51"><p>
	    <span class="numero">[51]</span>Modular Choreographies: Bridging Alice and Bob Notation to Java (with A.&nbsp;Madsen, <a href="http://www.fabriziomontesi.com/">F.&nbsp;Montesi</a> and M.&nbsp;Peressotti)
	    <a href="pubs/c51.pdf"><img width="16" height="16" alt="pdf" src="pdf.png" /></a>
	    <a href="pubs/c51.bib"><img width="26" height="16" alt="BiBTeX" src="bibtex.png" /></a><br />
	    in G.&nbsp;Dorai, M.&nbsp;Gabbrielli, G.&nbsp;Manzonetto, A.&nbsp;Osmani, M.&nbsp;Prandini, G.&nbsp;Zavattaro and O.&nbsp;Zimmermann (eds.), <i>Joint Post-proceedings of the Third and Fourth International Conference on Microservices, Microservices 2020/2022</i>,
	    OASIcs <b>111</b>(3)1-18. Schloss Dagstuhl, December 2023.<br />
	    <span class="doi">DOI 10.4230/OASICS.MICROSERVICES.2020-2022.3</span></p>
	  <div class="abstract">
	    <b>Abstract.</b> We present Modular Choreographies, a new choreographic programming language that features modular functions. Modular Choreographies is aimed at simplicity: its communication abstraction follows the simple tradition from the &ldquo;Alice and Bob&rdquo; notation. We develop a compiler toolchain that translates choreographies into modular Java libraries, which developers can use to participate correctly in choreographies. The key novelty is to compile through the Choral language, which was previously proposed to define object-oriented choreographies: our toolchain compiles Modular Choreographies to Choral, and then leverages the existing Choral compiler to generate Java code. Our work is the first to bridge the simplicity of traditional choreographic programming languages with the requirement of generating modular libraries in a mainstream language (Java).</div>
	</div>

	<div class="pub" id="c50"><p>
	    <span class="numero">[50]</span>µXL: Explainable Lead Generation with Microservices and Hypothetical Answers (with S.&nbsp;Kostopoulou, <a href="http://www.fabriziomontesi.com/">F.&nbsp;Montesi</a> and J.&nbsp;Vistrup),
	    <a href="http://link.springer.com/chapter/10.1007/978-3-031-46235-1_1">&copy; Springer</a>
	    <a href="pubs/c50.pdf"><img width="16" height="16" alt="pdf" src="pdf.png" /></a>
	    <a href="pubs/c50.bib"><img width="26" height="16" alt="BiBTeX" src="bibtex.png" /></a><br />
	    in G.A.&nbsp; Papadopoulos, F.&nbsp;Rademacher and J.&nbsp;Soldani (eds.), <i>European Conference on Service-Oriented and Cloud Computing, ESOCC 2023</i>,
	    LNCS <b>14183</b>:3-18. Springer, October 2023.<br />
	    <span class="doi">DOI 10.1007/978-3-031-46235-1_1</span></p>
	  <div class="abstract">
	    <b>Abstract.</b> Lead generation refers to the identification of potential topics (the &lsquo;leads&rsquo;) of importance for journalists to report on. In this paper we present a new lead generation tool based on a microservice architecture, which includes a component of explainable AI. The lead generation tool collects and stores historical and real-time data from a web source, like Google Trends, and generates current and future leads. These leads are produced by an engine for hypothetical reasoning based on logical rules, which is a novel implementation of a recent theory. Finally, the leads are displayed on a web interface for end users, in particular journalists. This interface provides information on why a specific topic is or may become a lead, assisting journalists in deciding where to focus their attention. We carry out an empirical evaluation of the performance of our tool.</div>
	</div>

	<div class="pub" id="c49"><p>
	    <span class="numero">[49]</span> Now It Compiles! Certified Automatic Repair of Uncompilable Protocols (with <a href="http://www.fabriziomontesi.com/">F.&nbsp;Montesi</a>)
	    <a href="pubs/c49.pdf"><img width="16" height="16" alt="pdf" src="pdf.png" /></a>
	    <a href="pubs/c49.bib"><img width="26" height="16" alt="BiBTeX" src="bibtex.png" /></a><br />
	    in A.&nbsp;Naumowicz and R.&nbsp;Thiemann (eds.), <i>Interactive Theorem Proving, ITP 2023</i>,
	    LIPIcs <b>268</b>(11)1-19. Schloss Dagstuhl, July 2023.<br />
	    <span class="doi">DOI 10.4230/LIPIcs.ITP.2023.11</span></p>
	  <div class="abstract">
	    <b>Abstract.</b> Choreographic programming is a paradigm where developers write the global specification (called choreography) of a communicating system, and then a correct-by-construction distributed implementation is compiled automatically. Unfortunately, it is possible to write choreographies that cannot be compiled, because of issues related to an agreement property known as knowledge of choice. This forces programmers to reason manually about implementation details that may be orthogonal to the protocol that they are writing.<br />
	    Amendment is an automatic procedure for repairing uncompilable choreographies. We present a formalisation of amendment from the literature, built upon an existing formalisation of choreographic programming. However, in the process of formalising the expected properties of this procedure, we discovered a subtle counterexample that invalidates the original published and peer-reviewed pen-and-paper theory. We discuss how using a theorem prover led us to both finding the issue, and stating and proving a correct formulation of the properties of amendment.</div>
	</div>

	<div class="pub" id="c48"><p>
	    <span class="numero">[48]</span>Modular Compilation for Higher-Order Functional Choreographies (with E.&nbsp;Graversen, L.&nbsp;Lugovic, <a href="http://www.fabriziomontesi.com/">F.&nbsp;Montesi</a> and M.&nbsp;Peressotti)
	    <a href="pubs/c48.pdf"><img width="16" height="16" alt="pdf" src="pdf.png" /></a>
	    <a href="pubs/c48.bib"><img width="26" height="16" alt="BiBTeX" src="bibtex.png" /></a><br />
	    in K.&nbsp;Ali and G.&nbsp;Salvaneschi (eds.), <i>European Conference on Object-Oriented Programming, ECOOP 2023</i>,
	    LIPIcs <b>263</b>(7)1-37. Schloss Dagstuhl, July 2023.<br />
	    <span class="doi">DOI 10.4230/LIPIcs.ECOOP.2023.7</span></p>
	  <div class="abstract">
	    <b>Abstract.</b> Choreographic programming is a paradigm for concurrent and distributed software, whereby descriptions of the intended communications (choreographies) are automatically compiled into distributed code with strong safety and liveness properties (e.g., deadlock-freedom).<br />
	    Recent efforts tried to combine the theories of choreographic programming and higher-order functional programming, in order to integrate the benefits of the former with the modularity of the latter. However, they do not offer a satisfactory theory of compilation compared to the literature, because of important syntactic and semantic shortcomings: compilation is not modular (editing a part might require recompiling everything) and the generated code can perform unexpected global synchronisations.<br />
	    In this paper, we find that these shortcomings are not mere coincidences. Rather, they stem from genuine new challenges posed by the integration of choreographies and functions: knowing which participants are involved in a choreography becomes nontrivial, and divergence in applications requires rethinking how to prove the semantic correctness of compilation.<br />
	    We present a novel theory of compilation for functional choreographies that overcomes these challenges, based on types and a careful design of the semantics of choreographies and distributed code. The result: a modular notion of compilation, which produces code that is deadlock-free and correct (it operationally corresponds to its source choreography).</div>
	</div>

	<div class="pub" id="c47"><p>
	    <span class="numero">[47]</span>Certified Compilation of Choreographies with <code>hacc</code> (with L.&nbsp;Lugovic and <a href="http://www.fabriziomontesi.com/">F.&nbsp;Montesi</a>),
	    <a href="http://link.springer.com/chapter/10.1007/978-3-031-35355-0_3">&copy; Springer</a>
	    <a href="pubs/c47.pdf"><img width="16" height="16" alt="pdf" src="pdf.png" /></a>
	    <a href="pubs/c47.bib"><img width="26" height="16" alt="BiBTeX" src="bibtex.png" /></a><br />
	    in M.&nbsp;Huisman and A.&nbsp;Ravara (eds.), <i>Formal Techniques for Distributed Objects, Components, and Systems, FORTE 2023</i>,
	    LNCS <b>13910</b>:29-36. Springer, June 2023.<br />
	    <span class="doi">DOI 978-3-031-35355-0_3</span></p>
	  <div class="abstract">
	    <b>Abstract.</b> Programming communicating processes is challenging, because it requires writing separate programs that perform compatible send and receive actions at the right time during execution. Leaving this task to the programmer can easily lead to bugs. Choreographic programming addresses this challenge by equipping developers with high-level abstractions for codifying the desired communication structures from a global viewpoint. Given a choreography, implementations of the involved processes can be automatically generated by endpoint projection (EPP).<br />
	    While choreographic programming prevents manual mistakes in the implementation of communications, the correctness of a choreographic programming framework crucially hinges on the correctness of its complex compiler, which has motivated formalisation of theories of choreographic programming in theorem provers. In this paper, we build upon one of these formalisations to construct a toolchain that produces executable code from a choreography.</div>
	</div>

	<div class="pub" id="c46"><p>
	    <span class="numero">[46]</span>Reasoning about Choreographic Programs (with E.&nbsp;Graversen, <a href="http://www.fabriziomontesi.com/">F.&nbsp;Montesi</a> and M.&nbsp;Peressotti),
	    <a href="http://link.springer.com/chapter/10.1007/978-3-031-35361-1_8">&copy; Springer</a>
	    <a href="pubs/c46.pdf"><img width="16" height="16" alt="pdf" src="pdf.png" /></a>
	    <a href="pubs/c46.bib"><img width="26" height="16" alt="BiBTeX" src="bibtex.png" /></a><br />
	    in  S.-S.&nbsp;Jongmans and A.&nbsp;Lopes (eds.), <i>Coordination Models and Languages, COORDINATION 2023</i>,
	    LNCS <b>13908</b>:144-162. Springer, June 2023.<br />
	    <span class="doi">DOI 10.1007/978-3-031-35361-1_8</span></p>
	  <div class="abstract">
	    <b>Abstract.</b> Choreographic programming is a paradigm where a concurrent or distributed system is developed in a top-down fashion. Programs, called choreographies, detail the desired interactions between processes, and can be compiled to distributed implementations based on message passing. Choreographic languages usually guarantee deadlock-freedom and provide an operational correspondence between choreographies and their compiled implementations, but until now little work has been done on verifying other properties.<br />
	    This paper presents a Hoare-style logic for reasoning about the behaviour of choreographies, and illustrate its usage in representative examples. We show that this logic is sound and complete, and discuss decidability of its judgements. Using existing results from choreographic programming, we show that any functional correctness property proven for a choreography also holds for its compiled implementation.</div>
	</div>

	<div class="pub" id="c45"><p>
	    <span class="numero">[45]</span>Keep me out of the loop: a more flexible choreographic projection (with <a href="http://www.fabriziomontesi.com/">F.&nbsp;Montesi</a> and R.R.&nbsp;Rasmussen)
	    <a href="pubs/c45.pdf"><img width="16" height="16" alt="pdf" src="pdf.png" /></a>
	    <a href="pubs/c45.bib"><img width="26" height="16" alt="BiBTeX" src="bibtex.png" /></a><br />
	    in R.&nbsp;Piskac and A.&nbsp;Voronkov (eds.), <i>Proceedings of LPAR-24</i>,
	    EPiC Series in Computing <b>94</b>:144-163. EasyChair Publications, June 2023.<br />
	    <span class="doi">DOI 10.29007/WBW3</span></p>
	  <div class="abstract">
	    <b>Abstract.</b> Choreographic programming is a paradigm where programmers write global descriptions of distributed protocols, called choreographies, and correct implementations are automatically generated by a mechanism called projection. Not all choreographies are projectable, because decisions made by one process must be communicated to other processes whose behaviour depends on them &ndash; a property known as knowledge of choice.<br />
	    The standard formulation of knowledge of choice disallows protocols such as third-party authentication with retries, where two processes iteratively interact, and other processes wait to be notified at the end of this loop. In this work we show how knowledge of choice can be weakened, extending the class of projectable choreographies with these and other interesting behaviours. The whole development is formalised in Coq. Working with a proof assistant was crucial to our development, because of the help it provided with detecting counterintuitive edge cases that would otherwise have gone unnoticed.</div>
	</div>

	<div class="pub" id="c44"><p>
	    <span class="numero">[44]</span>Functional Choreographic Programming (with E.&nbsp;Graversen, L.&nbsp;Lugovic, <a href="http://www.fabriziomontesi.com/">F.&nbsp;Montesi</a> and M.&nbsp;Peressotti),
	    <a href="http://link.springer.com/chapter/10.1007/978-3-031-17715-6_15">&copy; Springer</a>
	    <a href="pubs/c44.pdf"><img width="16" height="16" alt="pdf" src="pdf.png" /></a>
	    <a href="pubs/c44.bib"><img width="26" height="16" alt="BiBTeX" src="bibtex.png" /></a><br />
	    in H.&nbsp;Seidl, Z.&nbsp;Liu and C.S.&nbsp;Pasareanu (eds.), <i>Theoretical Aspects of Computing, ICTAC 2022</i>,
	    LNCS <b>13572</b>:212-237. Springer, September 2022.<br />
	    <span class="doi">DOI 10.1007/978-3-031-17715-6_15</span></p>
	  <div class="abstract">
	    <b>Abstract.</b> Choreographic programming is an emerging programming paradigm for concurrent and distributed systems, where developers write the communications that should be enacted and a compiler then automatically generates a distributed implementation. Currently, the most advanced incarnation of the paradigm is Choral, an object-oriented choreographic programming language that targets Java. Choral deviated significantly from known theories of choreographies, and in particular introduced the possibility of expressing higher-order choreographies that are fully distributed.<br />
	    In this article, we introduce Chorλ, the first functional choreographic programming language. It is also the first theory that explains the core ideas of higher-order choreographic programming. We show that bridging the gap between practice and theory requires developing a new evaluation strategy and typing discipline for λ-terms that accounts for the distributed nature of computation in choreographies.</div>
	</div>

	<div class="pub" id="c43"><p>
	    <span class="numero">[43]</span>Reconciling Communication Delays and Negation (with <a href="http://www.di.fc.ul.pt/~gg/">G.&nbsp;Gaspar</a> and <a href="http://www.di.fc.ul.pt/~in/">I.&nbsp;Nunes</a>),
	    <a href="http://link.springer.com/chapter/10.1007/978-3-031-17715-6_11">&copy; Springer</a>
	    <a href="pubs/c43.pdf"><img width="16" height="16" alt="pdf" src="pdf.png" /></a>
	    <a href="pubs/c43.bib"><img width="26" height="16" alt="BiBTeX" src="bibtex.png" /></a><br />
	    in H.&nbsp;Seidl, Z.&nbsp;Liu and C.S.&nbsp;Pasareanu (eds.), <i>Theoretical Aspects of Computing, ICTAC 2022</i>,
	    LNCS <b>13572</b>:151-169. Springer, September 2022.<br />
	    <span class="doi">DOI 10.1007/978-3-031-17715-6_11</span></p>
	  <div class="abstract">
	    <b>Abstract.</b> Hypothetical continuous query answering over data streams was introduced as a way to anticipate answers to queries that depend on facts that may or may not happen in the future. Previous work has studied this problem for Temporal Datalog with negation and instantaneous communication, showing that hypothetical answers can be incrementally updated as new data arrives at the data stream.<br />
	    In practice, individual communications take variable amounts of time, so data may arrive delayed and unordered. This motivates studying hypothetical continuous query answering in a setting with communication delays. The interaction between communication delays and negation is however problematic, and the existing approach is restricted to the positive fragment of the language. In this work we show how to remove this restriction by defining an appropriate operational semantics based on fixpoint theory, and showing that the relevant fixpoints can be computed in finite time by a carefully designed algorithm.</div>
	</div>

	<div class="pub" id="c42"><p>
	    <span class="numero">[42]</span>From Infinity to Choreographies: Extraction for Unbounded Systems (with B.A.&nbsp;Kjær and <a href="http://www.fabriziomontesi.com/">F.&nbsp;Montesi</a>),
	    <a href="http://link.springer.com/chapter/10.1007/978-3-031-16767-6_6">&copy; Springer</a>
	    <a href="pubs/c42.pdf"><img width="16" height="16" alt="pdf" src="pdf.png" /></a>
	    <a href="pubs/c42.bib"><img width="26" height="16" alt="BiBTeX" src="bibtex.png" /></a><br />
	    in A.&nbsp;Villanueva (ed.), <i>Logic-Based Program Synthesis and Transformation, LOPSTR 2022</i>,
	    LNCS <b>13474</b>:103-120. Springer, August 2022.<br />
	    <span class="doi">DOI 10.1007/978-3-031-16767-6_6</span></p>
	  <div class="abstract">
	    <b>Abstract.</b> Choreographies are formal descriptions of distributed systems, which focus on the way in which participants communicate. While they are useful for analysing protocols, in practice systems are written directly by specifying each participant’s behaviour. This created the need for choreography extraction: the process of obtaining a choreography that faithfully describes the collective behaviour of all participants in a distributed protocol.<br />
	    Previous works have addressed this problem for systems with a predefined, finite number of participants. In this work, we show how to extract choreographies from system descriptions where the total number of participants is unknown and unbounded, due to the ability of spawning new processes at runtime. This extension is challenging, since previous algorithms relied heavily on the set of possible states of the network during execution being finite.</div>
	</div>

	<div class="pub" id="c41"><p>
	    <span class="numero">[41]</span>Can You Answer While You Wait? (with <a href="http://www.di.fc.ul.pt/~gg/">G.&nbsp;Gaspar</a> and <a href="http://www.di.fc.ul.pt/~in/">I.&nbsp;Nunes</a>),
	    <a href="http://link.springer.com/chapter/10.1007/978-3-031-11321-5_7">&copy; Springer</a>
	    <a href="pubs/c41.pdf"><img width="16" height="16" alt="pdf" src="pdf.png" /></a>
	    <a href="pubs/c41.bib"><img width="26" height="16" alt="BiBTeX" src="bibtex.png" /></a><br />
	    in I.&nbsp;Varzinczak (ed.), <i>Foundations of Information and Knowledge Systems &ndash; 12th International Symposium, FoIKS 2022</i>,
	    LNCS <b>13388</b>:111-129. Springer, July 2022.<br />
	    <span class="doi">DOI 10.1007/978-3-031-11321-5_7</span></p>
	  <div class="abstract">
	    <b>Abstract.</b> Continuous query answering is a challenging problem faced by systems that need to reason over data as it arrives. Recently, a logicbased approach to this problem has been proposed that advocates generating hypothetical query answers &ndash; potential answers that are consistent with the available data, but still require confirmation by future input.<br />
	    The current work studies hypothetical query answering in realistic settings, where data may arrive out of order. This requires revising its semantics and reanalysing the intuitions that led to the design of the existing algorithms, in order to develop a novel incremental online algorithm that takes into account that past data may yet arrive. We also discuss how our methods may be extended to channels with losses.</div>
	</div>

	<div class="pub" id="c40"><p>
	    <span class="numero">[40]</span>Certifying Choreography Compilation (with <a href="http://www.fabriziomontesi.com/">F.&nbsp;Montesi</a> and M.&nbsp;Peressotti),
	    <a href="http://link.springer.com/chapter/10.1007/978-3-030-85315-0_8">&copy; Springer</a>
	    <a href="pubs/c40.pdf"><img width="16" height="16" alt="pdf" src="pdf.png" /></a>
	    <a href="pubs/c40.bib"><img width="26" height="16" alt="BiBTeX" src="bibtex.png" /></a><br />
	    in A.&nbsp;Cerone and P.&nbsp;Ölveczky (eds.), <i>Theoretical Aspects of Computing &ndash; ICTAC 2021.</i>,
	    LNCS <b>12819</b>:115-133. Springer, September 2021.<br />
	    <span class="doi">DOI 10.1007/978-3-030-85315-0_8</span></p>
	  <div class="abstract">
	    <b>Abstract.</b> Choreographic programming is a paradigm for developing concurrent and distributed systems, where programs are <em>choreographies</em> that define, from a global viewpoint, the computations and interactions that communicating processes should enact. <em>Choreography compilation</em> translates choreographies into the local definitions of process behaviours, given as terms in a process calculus.<br />
	    Proving choreography compilation correct is challenging and error-prone, because it requires relating languages in different paradigms (global interactions vs local actions) and dealing with a combinatorial explosion of proof cases. We present the first certified program for choreography compilation for a nontrivial choreographic language supporting recursion.</div>
	</div>

	<div class="pub" id="c39"><p>
	    <span class="numero">[39]</span>Formalising a Turing-Complete Choreography Language in Coq (with <a href="http://www.fabriziomontesi.com/">F.&nbsp;Montesi</a> and M.&nbsp;Peressotti)
	    <a href="pubs/c39.pdf"><img width="16" height="16" alt="pdf" src="pdf.png" /></a>
	    <a href="pubs/c39.bib"><img width="26" height="16" alt="BiBTeX" src="bibtex.png" /></a><br />
	    in L.&nbsp;Cohen and C.&nbsp;Kaliszyk (eds.), <i>Interactive Theorem Proving, ITP 2021.</i>,
	    LIPIcs <b>193</b>:15:1-15:18. Schloss Dagstuhl, June 2021.<br />
	    <span class="doi">DOI 10.4230/LIPIcs.ITP.2021.15</span></p>
	  <div class="abstract">
	    <b>Abstract.</b> The theory of choreographic languages typically includes a number of complex results that are proved by structural induction. The high number of cases and the subtle details in some of them lead to long reviewing processes, and occasionally to errors being found in published proofs. In this work, we take a published proof of Turing completeness of a choreographic language and formalise it in Coq. Our development includes formalising the choreographic language, its basic properties, Kleene's theory of partial recursive functions, the encoding of these functions as choreographies, and a proof that this encoding is correct.<br />
	    With this effort, we show that theorem proving can be a very useful tool in the field of choreographic languages: besides the added degree of confidence that we get from a mechanised proof, the formalisation process led us to a significant simplification of the underlying theory. Our results offer a foundation for the future formal development of choreographic languages.</div>
	</div>

	<div class="pub" id="c38"><p>
	    <span class="numero">[38]</span>Hypothetical Answers to Continuous Queries over Data Streams (with <a href="http://www.di.fc.ul.pt/~gg/">G.&nbsp;Gaspar</a> and <a href="http://www.di.fc.ul.pt/~in/">I.&nbsp;Nunes</a>)
	    <a href="pubs/c38.pdf"><img width="16" height="16" alt="pdf" src="pdf.png" /></a>
	    <a href="pubs/c38.bib"><img width="26" height="16" alt="BiBTeX" src="bibtex.png" /></a><br />
	    in <i>The 34th AAAI Conference on Artificial Intelligence, AAAI 2020.</i>,
	    pages 2798-2805. AAAI Press, February 2020.<br />
	    <span class="doi">DOI 10.1609/aaai.v34i03.5668</span></p>
	  <div class="abstract">
	    <b>Abstract.</b> Continuous queries over data streams often delay answers until some relevant input arrives through the data stream. These delays may turn answers, when they arrive, obsolete to users who sometimes have to make decisions with no help whatsoever. Therefore, it can be useful to provide hypothetical answers &ndash; &ldquo;given the current information, it is possible that X will become true at time <i>t</i>&rdquo; &ndash; instead of no information at all.<br />
	    In this paper we present a semantics for queries and corresponding answers that covers such hypothetical answers, together with an online algorithm for updating the set of facts that are consistent with the currently available information.</div>
	</div>

	<div class="pub" id="c37"><p>
	    <span class="numero">[37]</span>Multiparty Classical Choreographies (with <a href="http://www.itu.dk/people/maca/">M.&nbsp;Carbone</a>, <a href="http://www.fabriziomontesi.com/">F.&nbsp;Montesi</a> and <a href="http://www.itu.dk/people/agmu/">A.&nbsp;Murawska</a>),
	    <a href="https://link.springer.com/chapter/10.1007/978-3-030-13838-7_4">&copy; Springer</a>
	    <a href="pubs/c37.pdf"><img width="16" height="16" alt="pdf" src="pdf.png" /></a>
	    <a href="pubs/c37.bib"><img width="26" height="16" alt="BiBTeX" src="bibtex.png" /></a><br />
	    in F.&nbsp;Mesnard and P.J.&nbsp;Stuckey (eds.), <i>Logic-Based Program Synthesis and Transformation (LOPSTR 2018)</i>,
	    LNCS <b>11408</b>:59-76. Springer, May 2019.<br />
	    <span class="doi">DOI 10.1007/978-3-030-13838-7_4</span></p>
	  <div class="abstract">
	    <b>Abstract.</b> We present Multiparty Classical Choreographies (MCC), a language model where global descriptions of communicating systems (choreographies) and processes can be modularly composed to implement typed multiparty sessions. Typing is achieved by generalising classical linear logic to judgements that explicitly record parallelism by means of hypersequents. Our approach unifies different lines of work on choreographies and processes with multiparty sessions, as well as their connection to linear logic. Thus, results developed in one context are carried over to the others. Key novelties of MCC include support for behavioural polymorphism in choreographies, as well as a translation from processes with replication to choreographies.</div>
	</div>

	<div class="pub" id="c36"><p>
	    <span class="numero">[36]</span> Machine-Assisted Proofs (with J.&nbsp;Davenport, B.&nbsp;Poonen, J.&nbsp;Maynard, H.&nbsp;Helfgott and P.H.&nbsp;Tiep)
	    <a href="pubs/c36.pdf"><img width="16" height="16" alt="pdf" src="pdf.png" /></a>
	    <a href="pubs/c36.bib"><img width="26" height="16" alt="BiBTeX" src="bibtex.png" /></a><br />
	    in B.&nbsp;Sirakov, P.&nbsp;Ney de Souza and M.&nbsp;Viana (eds.), <em>Proceedings of the International Congress of Mathematicians (ICM 2018)</em>, volume 1, pages 1085-1110. World Scientific, May 2019.<br />
	    <span class="doi">DOI 10.1142/11060</span></p>
	  <div class="abstract">
	    <b>Abstract.</b> This panel took place on Tuesday 7th August 2018. After the moderator had introduced the topic, the panelists presented their experiences and points of view, and then took questions from the floor.</div>
        </div>
	
	<div class="pub" id="c35"><p>
	    <span class="numero">[35]</span>Complete and Efficient DRAT Proof Checking (with A.&nbsp;Rebola-Pardo)
	    <a href="pubs/c35.pdf"><img width="16" height="16" alt="pdf" src="pdf.png" /></a>
	    <a href="pubs/c35.bib"><img width="26" height="16" alt="BiBTeX" src="bibtex.png" /></a><br />
	    in N.&nbsp;Björner and A.&nbsp;Gurfinkel (eds.), <i>Formal Methods for Computer-Aided Design (FMCAD 2018)</i>,
	    pages 1-9. IEEE, October 2018.<br />
	    <span class="doi">DOI 10.23919/FMCAD.2018.8602993</span></p>
	  <div class="abstract">
	    <b>Abstract.</b> DRAT proofs have become the standard for verifying unsatisfiability proofs emitted by modern SAT solvers. However, recent work showed that the specification of the format differs from its implementation in existing tools due to optimizations necessary for efficiency. Although such differences do not compromise soundness of DRAT checkers, the sets of correct proofs according to the specification and to the implementation are incomparable. We discuss how it is possible to design DRAT checkers faithful to the specification by carefully modifying the standard optimization techniques. We implemented such modifications in a configurable DRAT checker. Our experimental results show negligible overhead due to these modifications, suggesting that efficient verification of the DRAT specification is possible. Furthermore, we show that the differences between specification and implementation of DRAT often arise in practice.</div>
	</div>

	<div class="pub" id="c34"><p>
	    <span class="numero">[34]</span>Communications in Choreographies, Revisited (with <a href="http://www.fabriziomontesi.com/">F.&nbsp;Montesi</a> and M.&nbsp;Peressotti)
	    <a href="pubs/c34.pdf"><img width="16" height="16" alt="pdf" src="pdf.png" /></a>
	    <a href="pubs/c34.bib"><img width="26" height="16" alt="BiBTeX" src="bibtex.png" /></a><br />
	    in H.M.&nbsp;Haddad, R.L.&nbsp;Wainright and R.&nbsp;Chbeir (eds.),
	    <i>Proceedings of the Symposium on Applied Computing, SAC 2018, Pau, France, April 9-13, 2018</i>,
	    pages 1248-1255. ACM, 2018.<br />
	    <span class="doi">DOI 10.1145/3167132.3167267</span></p>
	  <div class="abstract">
	    <b>Abstract.</b> Choreographic Programming is a paradigm for developing correct-by-construction concurrent programs, by writing high-level descriptions of the desired communications and then synthesising process implementations automatically. So far, choreographic programming has been explored in the <i>monadic</i> setting: interaction terms express point-to-point communications of a single value. However, real-world systems often rely on interactions of <i>polyadic</i> nature, where multiple values are communicated among two or more parties, like multicast, scatter-gather, and atomic exchanges.<br />
	    We introduce a new model for choreographic programming equipped with a primitive for grouped interactions that subsumes all the above scenarios. Intuitively, grouped interactions can be thought of as being carried out as one single interaction. In practice, they are implemented by processes that carry them out in a concurrent fashion. After formalising the intuitive semantics of grouped interactions, we prove that choreographic programs and their implementations are correct and deadlock-free by construction.</div>
        </div>

	<div class="pub" id="c33"><p>
	    <span class="numero">[33]</span>How to Get More Out of Your Oracles (with <a href="http://imada.sdu.dk/~kslarsen/">K.S.&nbsp;Larsen</a> and <a href="http://imada.sdu.dk/~petersk/">P.&nbsp;Schneider-Kamp</a>),
	    <a href="http://link.springer.com/chapter/10.1007%2F978-3-319-66107-0_11">&copy; Springer</a>
	    <a href="pubs/c33.pdf"><img width="16" height="16" alt="pdf" src="pdf.png" /></a>
	    <a href="pubs/c33.bib"><img width="26" height="16" alt="BiBTeX" src="bibtex.png" /></a><br />
	    in M.&nbsp;Ayala-Rincon and C.&nbsp;Mu&ntilde;oz (eds.), <i>Interactive Theorem Proving, ITP 2017</i>,
	    LNCS <b>10499</b>:164-170. Springer, September 2017.<br />
	    <span class="doi">DOI 10.1007/978-3-319-66107-0_11</span></p>
	  <div class="abstract">
	    <b>Abstract.</b> Formal verification of large computer-generated proofs often relies on certified checkers based on oracles.  We propose a methodology for such proofs, advocating a separation of concerns between formalizing the underlying theory and optimizing the algorithm implemented in the checker, based on the observation that such optimizations can benefit significantly from adequately adapting the oracle.</div>
        </div>

	<div class="pub" id="c32"><p>
	    <span class="numero">[32]</span>Semantics for Active Integrity Constraints Using Approximation Fixpoint Theory (with <a href="http://bartbogaerts.eu/index.php">B.&nbsp;Bogaerts</a>)
	    <a href="pubs/c32.pdf"><img width="16" height="16" alt="pdf" src="pdf.png" /></a>
	    <a href="pubs/c32.bib"><img width="26" height="16" alt="BiBTeX" src="bibtex.png" /></a><br />
	    in C.&nbsp;Sierra (ed.), <i>26th International Joint Conference on Artificial Intelligence, IJCAI 2017</i>,
	    pages 866-872. IJCAI, 2017.<br />
	    <span class="doi ">DOI 10.24963/ijcai.2017/120</span></p>
	  <div class="abstract">
	    <b>Abstract.</b> Active integrity constraints (AICs) constitute a formalism to associate with a database not just the constraints it should adhere to, but also how to fix the database in case one or more of these constraints are violated. The intuitions regarding which repairs are &ldquo;good&rdquo; given such a description are closely related to intuitions that live in various areas of non-monotonic reasoning.<br />
	    In this paper, we apply <i>approximation fixpoint theory</i>, an abstract, algebraic framework designed to unify semantics of non-monotonic logics, to the field of AICs. This results in a new family of semantics for AICs. We study properties of our new semantics and relationships to existing semantics. In particular, we argue that the AFT-well-founded semantics has some very desirable properties.</div>
        </div>

	<div class="pub" id="c31"><p>
	    <span class="numero">[31]</span>Efficient Certified RAT Verification (with <a href="http://www.cs.utexas.edu/~marijn/">M.J.H.&nbsp;Heule</a>, <a href="http://www.cs.utexas.edu/~hunt/">W.A.&nbsp;Hunt&nbsp;Jr.</a>, <a href="https://www.cs.utexas.edu/~kaufmann/">M.&nbsp;Kaufmann</a> and <a href="http://imada.sdu.dk/~petersk/">P.&nbsp;Schneider-Kamp</a>),
	    <a href="http://link.springer.com/chapter/10.1007%2F978-3-319-63046-5_14">&copy; Springer</a>
	    <a href="pubs/c31.pdf"><img width="16" height="16" alt="pdf" src="pdf.png" /></a>
	    <a href="pubs/c31.bib"><img width="26" height="16" alt="BiBTeX" src="bibtex.png" /></a><br />
	    in L.&nbsp;de Moura (ed.), <i>Automated Deduction &ndash; CADE 26</i>,
	    LNAI <b>10395</b>:220-236. Springer, August 2017.<br />
	    <span class="doi">DOI 10.1007/978-3-319-63046-5_14</span></p>
	  <div class="abstract">
	    <b>Abstract.</b> Clausal proofs have become a popular approach to validate the results of SAT solvers. However, validating clausal proofs in the most widely supported format (DRAT) is expensive even in highly optimized implementations.  We present a new format, called LRAT, which extends the DRAT format with hints that facilitate a simple and fast validation algorithm.  Checking validity of LRAT proofs can be implemented using trusted systems such as the languages supported by theorem provers.  We demonstrate this by implementing two certified LRAT checkers, one in Coq and one in ACL2.</div>
        </div>

	<div class="pub" id="c30"><p>
	    <span class="numero">[30]</span>Procedural Choreographic Programming (with <a href="http://www.fabriziomontesi.com/">F.&nbsp;Montesi</a>),
	    <a href="http://link.springer.com/chapter/10.1007%2F978-3-319-60225-7_7">&copy; Springer</a>
	    <a href="pubs/c30.pdf"><img width="16" height="16" alt="pdf" src="pdf.png" /></a>
	    <a href="pubs/c30.bib"><img width="26" height="16" alt="BiBTeX" src="bibtex.png" /></a><br />
	    in A.&nbsp;Bouajjani and A.&nbsp;Silva (eds.), <i>Formal Techniques for Distributed Objects, Components, and Systems &ndash; 37th IFIP WG 6.1 International Conference, FORTE 2017</i>,
	    LNCS <b>10321</b>:92-107. Springer, June 2017.<br />
	    <span class="doi">DOI 10.1007/978-3-319-60225-7_7</span></p>
	  <div class="abstract">
	    <b>Abstract.</b> Choreographic Programming is an emerging paradigm for correct-by-construction concurrent programming. However, its applicability is limited by the current lack of support for reusable procedures.<br />
	    We propose Procedural Choreographies (PC), a choreographic language model with full procedural abstraction. PC includes unbounded process creation and name mobility, yielding a powerful framework for writing correct concurrent algorithms that can be compiled into a process calculus. This increased expressivity requires a typing discipline to ensure that processes are properly connected when enacting procedures.
	  </div>
	</div>

	<div class="pub" id="c29"><p>
	    <span class="numero">[29]</span>Encoding Asynchrony in Choreographies (with <a href="http://www.fabriziomontesi.com/">F.&nbsp;Montesi</a>)
	    <a href="pubs/c29.pdf"><img width="16" height="16" alt="pdf" src="pdf.png" /></a>
	    <a href="pubs/c29.bib"><img width="26" height="16" alt="BiBTeX" src="bibtex.png" /></a>
	    (poster <a href="pubs/201704-poster.pdf"><img width="16" height="16" alt="pdf" src="pdf.png" /></a>)<br />
	    in D.&nbsp;Shin and M.&nbsp;Lencastre (eds.),
	    <i>Proceedings of the Symposium on Applied Computing, SAC 2017, Marrakech, Morocco, April 3-7, 2017</i>,
	    pages 1175-1177. ACM, 2017.<br />
	    <span class="doi">DOI 10.1145/3019612.3019901</span></p>
	  <div class="abstract">
	    <b>Abstract.</b> Choreographies are widely used for the specification of concurrent and distributed software architectures.  Since asynchronous communications are ubiquitous in real-world systems, previous works have proposed different approaches for the formal modelling of asynchrony in choreographies.  Such approaches typically rely on ad-hoc syntactic terms or semantics for capturing the concept of messages in transit, yielding different formalisms that have to be studied separately.<br />
	    In this work, we take a different approach, and show that such extensions are not needed to reason about asynchronous communications in choreographies. Rather, we demonstrate how a standard choreography calculus already has all the needed expressive power to encode messages in transit (and thus asynchronous communications) through the primitives of process spawning and name mobility.  The practical consequence of our results is that we can reason about real-world systems within a choreography formalism that is simpler than those hitherto proposed.</div>
        </div>

	<div class="pub" id="c28"><p>
	    <span class="numero">[28]</span>Formally Proving the Boolean Pythagorean Triples Conjecture (with <a href="http://imada.sdu.dk/~petersk/">P.&nbsp;Schneider-Kamp</a>)
	    <a href="pubs/c28.pdf"><img width="16" height="16" alt="pdf" src="pdf.png" /></a>
	    <a href="pubs/c28.bib"><img width="26" height="16" alt="BiBTeX" src="bibtex.png" /></a><br />
	    in T.&nbsp;Eiter and D&nbsp;Sands (eds.),
	    <i>Proceedings of LPAR-21</i>,
	    EPiC Series in Computing <b>46</b>:509-522. EasyChair Publications, May 2017.<br />
	    <span class="doi">DOI 10.29007/JVDJ</span></p>
	  <div class="abstract">
	    <b>Abstract.</b> In 2016, Heule, Kullmann and Marek solved the Boolean Pythagorean Triples problem: is there a binary coloring of the natural numbers such that every Pythagorean triple contains an element of each color?  By encoding a finite portion of this problem as a propositional formula and showing its unsatisfiability, they established that such a coloring does not exist.  Subsequently, this answer was verified by a correct-by-construction checker extracted from a Coq formalization, which was able to reproduce the original proof.  However, none of these works address the question of formally addressing the relationship between the propositional formula that was constructed and the mathematical problem being considered.  In this work, we formalize the Boolean Pythagorean Triples problem in Coq.  We recursively define a family of propositional formulas, parameterized on a natural number <i>n</i>, and show that unsatisfiability of this formula for any particular <i>n</i> implies that there does not exist a solution to the problem.  We then formalize the mathematical argument behind the simplification step in the original proof of unsatisfiability and the logical argument underlying cube-and-conquer, obtaining a verified proof of Heule <i>et al.</i>'s solution.</div>
        </div>

	<div class="pub" id="c27"><p>
	    <span class="numero">[27]</span>A Core Model for Choreographic Programming (with <a href="http://www.fabriziomontesi.com/">F.&nbsp;Montesi</a>),
	    <a href="http://link.springer.com/chapter/10.1007/978-3-319-57666-4_3">&copy; Springer</a>
	    <a href="pubs/c27.pdf"><img width="16" height="16" alt="pdf" src="pdf.png" /></a>
	    <a href="pubs/c27.bib"><img width="26" height="16" alt="BiBTeX" src="bibtex.png" /></a><br />
	    in O.&nbsp;Kouchnarenko and R.&nbsp;Khosravi (eds.),
	    <i>Formal Aspects of Component Software &ndash; 13th International Conference, FACS 2016</i>,
	    LNCS <b>10231</b>:17-35. Springer, April 2017.<br />
	    <span class="doi">DOI 10.1007/978-3-319-57666-4_3</span></p>
	  <div class="abstract">
	    <b>Abstract.</b> Choreographic Programming is a paradigm for developing concurrent programs that are deadlock-free by construction, by programming communications declaratively and then synthesising process implementations automatically. Despite strong interest on choreographies, a foundational model that explains which computations can be performed with the hallmark constructs of choreographies is still missing.<br />
	    In this work, we introduce Core Choreographies (CC), a model that includes only the core primitives of choreographic programming. Every computable function can be implemented as a choreography in CC, from which we can synthesise a process implementation where independent computations run in parallel. We discuss the design of CC and argue that it constitutes a canonical model for choreographic programming.
	  </div>
        </div>

	<div class="pub" id="c26"><p>
	    <span class="numero">[26]</span>Efficient Certified Resolution Proof Checking (with J.&nbsp;Marques-Silva and <a href="http://imada.sdu.dk/~petersk/">P.&nbsp;Schneider-Kamp</a>),
	    <a href="http://link.springer.com/chapter/10.1007/978-3-662-54577-5_7">&copy; Springer</a>
	    <a href="pubs/c26.pdf"><img width="16" height="16" alt="pdf" src="pdf.png" /></a>
	    <a href="pubs/c26.bib"><img width="26" height="16" alt="BiBTeX" src="bibtex.png" /></a><br />
	    in A.&nbsp;Legay and T.&nbsp;Margaria (eds.),
	    <i>Tools and Algorithms for the Construction and Analysis of Systems, TACAS 2017</i>,
	    LNCS <b>10205</b>:118-135. Springer, April 2017.<br />
	    <span class="doi">DOI 10.1007/978-3-662-54577-5_7</span></p>
	  <div class="abstract">
	    <b>Abstract.</b> We present a novel propositional proof tracing format that eliminates complex processing, thus enabling efficient (formal) proof checking.  The benefits of this format are demonstrated by implementing a proof checker in C, which outperforms a state-of-the-art checker by two orders of magnitude.  We then formalize the theory underlying propositional proof checking in Coq, and extract a correct-by-construction proof checker for our format from the formalization.  An empirical evaluation using 280 unsatisfiable instances from the 2015 and 2016 SAT competitions shows that this certified checker usually performs comparably to a state-of-the-art non-certified proof checker.  Using this format, we formally verify the recent 200 TB proof of the Boolean Pythagorean Triples conjecture.</div>
        </div>

	<div class="pub" id="c25"><p>
	    <span class="numero">[25]</span>The Paths to Choreography Extraction (with <a href="http://imada.sdu.dk/~kslarsen/">K.S.&nbsp;Larsen</a> and <a href="http://www.fabriziomontesi.com/">F.&nbsp;Montesi</a>),
	    <a href="http://link.springer.com/chapter/10.1007/978-3-662-54458-7_25">&copy; Springer</a>
	    <a href="pubs/c25.pdf"><img width="16" height="16" alt="pdf" src="pdf.png" /></a>
	    <a href="pubs/c25.bib"><img width="26" height="16" alt="BiBTeX" src="bibtex.png" /></a><br />
	    in J.&nbsp;Esparza and A.S.&nbsp;Murawski (eds.),
	    <i>Foundations of Software Science and Computation Structures, FoSSaCS 2017</i>,
	    LNCS <b>10203</b>:424-440. Springer, April 2017.<br />
	    <span class="doi">DOI 10.1007/978-3-662-54458-7_25</span></p>
	  <div class="abstract">
	    <b>Abstract.</b> Choreographies are global descriptions of interactions among concurrent components, most notably used in the settings of verification (e.g., Multiparty Session Types) and synthesis of correct-by-construction software (Choreographic Programming).  They require a top-down approach: programmers first write choreographies, and then use them to verify or synthesize their programs.  However, most existing software does not come with choreographies yet, which prevents their application.<br />
	    To attack this problem, we propose a novel methodology (called choreography extraction) that, given a set of programs or protocol specifications, automatically constructs a choreography that describes their behavior. The key to our extraction is identifying a set of paths in a graph that represents the symbolic execution of the programs of interest. Our method improves on previous work in several directions: we can now deal with programs that are equipped with a state and internal computation capabilities; time complexity is dramatically better; we capture programs that are correct but not necessarily synchronizable, i.e., they work because they exploit asynchronous communication.</div>
        </div>

	<div class="pub" id="c24"><p>
	    <span class="numero">[24]</span>Active Integrity Constraints: from Theory to Implementation (with M.&nbsp;Franz, A.&nbsp;Hakhverdyan, M.&nbsp;Ludovico, <a href="http://www.di.fc.ul.pt/~in/">I.&nbsp;Nunes</a> and <a href="http://imada.sdu.dk/~petersk/">P.&nbsp;Schneider-Kamp</a>),
	    <a href="http://link.springer.com/chapter/10.1007/978-3-319-52758-1_22">&copy; Springer</a>
	    <a href="pubs/c24.pdf"><img width="16" height="16" alt="pdf" src="pdf.png" /></a>
	    <a href="pubs/c24.bib"><img width="26" height="16" alt="BiBTeX" src="bibtex.png" /></a><br />
	    in A.&nbsp;Fred, J.&nbsp;Dietz, D.&nbsp;Aveiro, K.&nbsp;Liu and J.&nbsp;Filipe (eds.), <i>Knowledge Discovery, Knowledge Engineering and Knowledge Management (IC3K2015)</i>,
	    CCIS <b>631</b>:399-420. Springer, December 2016.<br />
	    <span class="doi">DOI 10.1007/978-3-319-52758-1_22</span></p>
	  <div class="abstract">
	    <b>Abstract.</b> The problem of database consistency relative to a set of integrity constraints has been extensively studied since the 1980s, and is still recognized as one of the most important and complex in the field.  In recent years, with the proliferation of knowledge repositories (not only databases) in practical applications, there has also been an effort to develop implementations of consistency maintenance algorithms that have a solid theoretical basis.<br />
	    The framework of active integrity constraints (AICs) is one example of such an effort, providing theoretical grounds for rule-based algorithms for ensuring database consistency.  An AIC consists of an integrity constraint together with a specification of actions that may be taken to repair a database that does not satisfy it.  Both denotational and operational semantics have been proposed for AICs.<br />
	    In this paper, we describe <code>repAIrC</code>, a prototype implementation of the algorithms previously proposed targetting SQL databases, i.e., the most prolific type of databases.  Using <code>repAIrC</code>, we can both validate an SQL database with respect to a given set of AICs and compute possible repairs in case the database is inconsistent; the tool is able to work with the different kinds of repairs that have been considered, and achieves optimal asymptotic complexity in their computation.  It also implements strategies for parallelizing the search for repairs, which in many cases can make untractable problems become easily solvable.
	  </div>
	</div>

	<div class="pub" id="c23"><p>
	    <span class="numero">[23]</span>Active Integrity Constraints for Multi-context Systems (with <a href="http://www.di.fc.ul.pt/~gg/">G.&nbsp;Gaspar</a>, <a href="http://www.di.fc.ul.pt/~in/">I.&nbsp;Nunes</a> and <a href="http://imada.sdu.dk/~petersk/">P.&nbsp;Schneider-Kamp</a>),
	    <a href="http://link.springer.com/chapter/10.1007%2F978-3-319-49004-5_7">&copy; Springer</a>
	    <a href="pubs/c23.pdf"><img width="16" height="16" alt="pdf" src="pdf.png" /></a>
	    <a href="pubs/c23.bib"><img width="26" height="16" alt="BiBTeX" src="bibtex.png" /></a><br />
	    in E.&nbsp;Blomqvist, F.&nbsp;Vitali, P.&nbsp;Ciancatini and F.&nbsp;Poggi (eds.),
	    <i>Knowledge Engineering and Knowledge Management &ndash; 20th International Conference, EKAW 2016</i>,
	    LNAI <b>10024</b>:98-112, Springer, November 2016.<br />
	    <span class="doi">DOI: 10.1007/978-3-319-49004-5_7</span></p>
	  <div class="abstract">
	    <b>Abstract.</b> We introduce a formalism to couple integrity constraints over general-purpose knowledge bases with actions that can be executed to restore consistency.  This formalism generalizes active integrity constraints over databases.  In the more general setting of multi-context systems, adding repair suggestions to integrity constraints allows defining simple iterative algorithms to find all possible grounded repairs &ndash; repairs for the global system that follow the suggestions given by the actions in the individual rules.  We apply our methodology to ontologies, and show that it can express most relevant types of integrity constraints in this domain.
	  </div>
	</div>

	<div class="pub" id="c22"><p>
	    <span class="numero">[22]</span>Grounded Fixpoints and Active Integrity Constraints
	    <a href="pubs/c22.pdf"><img width="16" height="16" alt="pdf" src="pdf.png" /></a>
	    <a href="pubs/c22.bib"><img width="26" height="16" alt="BiBTeX" src="bibtex.png" /></a><br />
	    in M.&nbsp;Carro, A.&nbsp;King, M.&nbsp;De&nbsp;Vos and N.&nbsp;Saeedloei (eds.), <i>Technical Communications of the 32nd International Conference on Logic Programming (ICLP'16)</i>,
	    OASIcs <b>52</b>:11.1-11.14, Schloss Dagstuhl, November 2016.<br />
	    <span class="doi">DOI 10.4230/OASIcs.ICLP.2016.11</span></p>
	  <div class="abstract">
	    <b>Abstract.</b> The formalism of active integrity constraints was introduced as a way to specify particular classes of integrity constraints over relational databases together with preferences on how to repair existing inconsistencies.  The rule-based syntax of such integrity constraints also provides algorithms for finding such repairs that achieve the best asymptotic complexity.<br />
	    However, the different semantics that have been proposed for these integrity constraints all exhibit some counter-intuitive examples.  In this work, we look at active integrity constraints using ideas from algebraic fixpoint theory.  We show how database repairs can be modeled as fixpoints of particular operators on databases, and study how the notion of grounded fixpoint induces a corresponding notion of grounded database repair that captures several natural intuitions, and in particular avoids the problems of previous alternative semantics.<br />
	    In order to study grounded repairs in their full generality, we need to generalize the notion of grounded fixpoint to non-deterministic operators.  We propose such a definition and illustrate its plausibility in the database context.
	  </div>
	</div>

	<div class="pub" id="c21"><p>
	    <span class="numero">[21]</span>Choreographies in Practice (with <a href="http://www.fabriziomontesi.com/">F.&nbsp;Montesi</a>),
	    <a href="http://link.springer.com/chapter/10.1007%2F978-3-319-39570-8_8">&copy; Springer</a>
	    <a href="pubs/c21.pdf"><img width="16" height="16" alt="pdf" src="pdf.png" /></a>
	    <a href="pubs/c21.bib"><img width="26" height="16" alt="BiBTeX" src="bibtex.png" /></a><br />
	    in E.&nbsp;Albert and I.&nbsp;Lanesi (eds.), <i>Formal Techniques for Distributed Objects, Components, and Systems &ndash; 36th IFIP WG 6.1 International Conference, FORTE 2016</i>,
	    LNCS <b>9688</b>:114-123. Springer, June 2016.<br />
	    <span class="doi">DOI 10.1007/978-3-319-39570-8_8</span></p>
	  <div class="abstract">
	    <b>Abstract.</b> Choreographic Programming is a development methodology for concurrent software that guarantees correctness by construction. The key to this paradigm is to disallow mismatched I/O operations in programs, and mechanically synthesise process implementations.<br />
	    There is still a lack of practical illustrations of the applicability of choreographies to computational problems with standard concurrent solutions. In this work, we explore the potential of choreographic programming by writing concurrent algorithms for sorting, solving linear equations, and computing Fast Fourier Transforms. The lessons learned from this experiment give directions for future improvements of the paradigm.
	  </div>
	</div>

	<div class="pub" id="c20"><p>
	    <span class="numero">[20]</span>Integrity Constraints for General-Purpose Knowledge Bases (with <a href="http://www.di.fc.ul.pt/~in/">I.&nbsp;Nunes</a> and <a href="http://imada.sdu.dk/~petersk/">P.&nbsp;Schneider-Kamp</a>),
	    <a href="http://link.springer.com/chapter/10.1007%2F978-3-319-30024-5_13">&copy; Springer</a>
	    <a href="pubs/c20.pdf"><img width="16" height="16" alt="pdf" src="pdf.png" /></a>
	    <a href="pubs/c20.bib"><img width="26" height="16" alt="BiBTeX" src="bibtex.png" /></a><br />
	    in M.&nbsp;Gyssens and G.&nbsp;Simari (eds.), <i>Foundations of Information and Knowledge Systems &ndash; 9th International Symposium, FoIKS 2016</i>,
	    LNCS <b>9616</b>:235-254. Springer, March 2016.<br />
	    <span class="doi">DOI 10.1007/978-3-319-30024-5_13</span></p>
	  <div class="abstract">
	    <b>Abstract.</b> Integrity constraints in databases have been studied extensively since the 1980s, and they are considered essential to guarantee database integrity. In recent years, several authors have studied how the same notion can be adapted to reasoning frameworks, in such a way that they achieve the purpose of guaranteeing a system's consistency, but are kept separate from the reasoning mechanisms.<br />
	    In this paper we focus on multi-context systems, a general-purpose framework for combining heterogeneous reasoning systems, enhancing them with a notion of integrity constraints that generalizes the corresponding concept in the database world.
	  </div>
	</div>

	<div class="pub" id="c19"><p>
	    <span class="numero">[19]</span>Applying Sorting Networks to Synthesize Optimized Sorting Libraries (with <a href="http://www.cs.bgu.ac.il/~mcodish/">M.&nbsp;Codish</a>, M.&nbsp;Nebel and <a href="http://imada.sdu.dk/~petersk/">P.&nbsp;Schneider-Kamp</a>),
	    <a href="http://link.springer.com/chapter/10.1007%2F978-3-319-27436-2_8">&copy; Springer</a>
	    <a href="pubs/c19.pdf"><img width="16" height="16" alt="pdf" src="pdf.png" /></a>
	    <a href="pubs/c19.bib"><img width="26" height="16" alt="BiBTeX" src="bibtex.png" /></a><br />
	    in M.&nbsp;Falaschi (ed.), <i>Logic-Based Program Synthesis and Transformation (LOPSTR 2015)</i>,
	    LNCS <b>9527</b>:127-142. Springer, December 2015.<br />
	    <span class="doi">DOI 10.1007/978-3-319-27436-2_8</span></p>
	  <div class="abstract">
	    <b>Abstract.</b> This paper shows an application of the theory of sorting networks to facilitate the synthesis of optimized general purpose sorting libraries. Standard sorting libraries are often based on combinations of the classic Quicksort algorithm with insertion sort applied as the base case for small fixed numbers of inputs. Unrolling the code for the base case by ignoring loop conditions eliminates branching and results in code which is equivalent to a sorting network. This enables the application of further program transformations based on sorting network optimizations, and eventually the synthesis of code from sorting networks. We show that if considering the number of comparisons and swaps then theory predicts no real advantage of this approach. However, significant speed-ups are obtained when taking advantage of instruction level parallelism and non-branching conditional assignment instructions, both of which are common in modern CPU architectures. We provide empirical evidence that using code synthesized from efficient sorting networks as the base case for Quicksort libraries results in significant real-world speed-ups.
	  </div>
	</div>

	<div class="pub" id="c18"><p>
	    <span class="numero">[18]</span><code>repAIrC</code>: A Tool for Ensuring Data Consistency by Means of Active Integrity Constraints (with M.&nbsp;Franz, A.&nbsp;Hakhverdyan, M.&nbsp;Ludovico, <a href="http://www.di.fc.ul.pt/~in/">I.&nbsp;Nunes</a> and <a href="http://imada.sdu.dk/~petersk/">P.&nbsp;Schneider-Kamp</a>)
	    <a href="pubs/c18.pdf"><img width="16" height="16" alt="pdf" src="pdf.png" /></a>
	    <a href="pubs/c18.bib"><img width="26" height="16" alt="BiBTeX" src="bibtex.png" /></a><br />
	    in A.&nbsp;Fred, J.&nbsp;Dietz, D.&nbsp;Aveiro, K.&nbsp;Liu and J.&nbsp;Filipe (eds.),
	    <i>Proceedings of the 7th International Joint Conference on Knowledge Discovery, Knowledge Engineering and Knowledge Management (IC3K 2015)</i>, volume 3, pages 17-26.
	    SCITEPRESS, November 2015.<br />
	    <span class="doi">DOI 10.5220/0005586400170026</span></p>
	  <div class="abstract">
	    <b>Abstract.</b> Consistency of knowledge repositories is of prime importance in organization management. Integrity constraints are a well-known vehicle for specifying data consistency requirements in knowledge bases; in particular, active integrity constraints go one step further, allowing the specification of preferred ways to overcome inconsistent situations in the context of database management.<br />
	    This paper describes a tool to validate an SQL database with respect to a given set of active integrity constraints, proposing possible repairs in case the database is inconsistent. The tool is able to work with the different kinds of repairs proposed in the literature, namely simple, founded, well-founded and justified repairs. It also implements strategies for parallelizing the search for them, allowing the user both to compute partitions of independent or stratified active integrity constraints, and to apply these partitions to find repairs of inconsistent databases efficiently in parallel.
	  </div>
	</div>

	<div class="pub" id="c17"><p>
	    <span class="numero">[17]</span>Formalizing Size-Optimal Sorting Networks: Extracting a Certified Proof Checker (with <a href="http://imada.sdu.dk/~petersk/">P.&nbsp;Schneider-Kamp</a>),
	    <a href="http://link.springer.com/chapter/10.1007%2F978-3-319-22102-1_10">&copy; Springer</a>
	    <a href="pubs/c17.pdf"><img width="16" height="16" alt="pdf" src="pdf.png" /></a>
	    <a href="pubs/c17.bib"><img width="26" height="16" alt="BiBTeX" src="bibtex.png" /></a><br />
	    in C.&nbsp;Urban and X.&nbsp;Zhang (eds.), <i>Interactive Theorem Proving, ITP 2015</i>,
	    LNCS <b>9236</b>:154-169. Springer, August 2015.<br />
	    <span class="doi">DOI 10.1007/978-3-319-22102-1_10</span></p>
	  <div class="abstract">
	    <b>Abstract.</b> Since the proof of the four color theorem in 1976, computer-generated proofs have become a reality in mathematics and computer science. During the last decade, we have seen formal proofs using verified proof assistants being used to verify the validity of such proofs.<br />
	    In this paper, we describe a formalized theory of size-optimal sorting networks. From this formalization we extract a certified checker that successfully verifies computer-generated proofs of optimality on up to 8 inputs. The checker relies on an untrusted oracle to shortcut the search for witnesses on more than 1.6 million NP-complete subproblems.
	  </div>
	</div>

	<div class="pub" id="c16"><p>
	    <span class="numero">[16]</span>Optimizing a Certified Proof Checker for a Large-Scale Computer-Generated Proof (with <a href="http://imada.sdu.dk/~petersk/">P.&nbsp;Schneider-Kamp</a>),
	    <a href="http://link.springer.com/chapter/10.1007%2F978-3-319-20615-8_4">&copy; Springer</a>
	    <a href="pubs/c16.pdf"><img width="16" height="16" alt="pdf" src="pdf.png" /></a>
	    <a href="pubs/c16.bib"><img width="26" height="16" alt="BiBTeX" src="bibtex.png" /></a><br />
	    in M.&nbsp;Kerber, J.&nbsp;Carette, C.&nbsp;Kaliszyk, F.&nbsp;Rabe and V.&nbsp;Sorge (eds.), <i>Intelligent Computer Mathematics, CICM 2015</i>,
	    LNAI <b>9150</b>:55-70. Springer, July 2015.<br />
	    <span class="doi">DOI 10.1007/978-3-319-20615-8_4</span></p>
	  <div class="abstract">
	    <b>Abstract.</b> In recent work, we formalized the theory of optimal-size sorting networks with the goal of extracting a verified checker for the large-scale computer-generated proof that 25 comparisons are optimal when sorting 9 inputs, which required more than a decade of CPU time and produced 27 GB of proof witnesses.  The checker uses an untrusted oracle based on these witnesses and is able to verify the smaller case of 8 inputs within a couple of days, but it did not scale to the full proof for 9 inputs.<br />
	    In this paper, we describe several non-trivial optimizations of the algorithm in the checker, obtained by appropriately changing the formalization and capitalizing on the symbiosis with an adequate implementation of the oracle. We provide experimental evidence of orders of magnitude improvements to both runtime and memory footprint for 8 inputs, and actually manage to check the full proof for 9 inputs.
	  </div>
	  <ul><li>Awarded best paper in the proceedings of CICM 2015 (CALCULEMUS track)</li></ul>
	</div>

	<div class="pub" id="c15"><p>
	    <span class="numero">[15]</span>Design Patterns for Description-logic Programs (with <a href="http://www.di.fc.ul.pt/~gg/">G.&nbsp;Gaspar</a> and <a href="http://www.di.fc.ul.pt/~in/">I.&nbsp;Nunes</a>),
	    <a href="http://link.springer.com/chapter/10.1007%2F978-3-662-46549-3_13">&copy; Springer</a>
	    <a href="pubs/c15.pdf"><img width="16" height="16" alt="pdf" src="pdf.png" /></a>
	    <a href="pubs/c15.bib"><img width="26" height="16" alt="BiBTeX" src="bibtex.png" /></a><br />
	    in A.&nbsp;Fred, J.&nbsp;Dietz, K.&nbsp;Liu and J.&nbsp;Filipe (eds.), <i>Knowledge Discovery, Knowledge Engineering and Knowledge Management (IC3K2013)</i>,
	    CCIS <b>454</b>:199-214. Springer, April 2015.<br />
	    <span class="doi">DOI 10.1007/978-3-662-46549-3_13</span></p>
	  <div class="abstract">
	    <b>Abstract.</b> Originally proposed in the mid-90s, design patterns for software development played a key role in object-oriented programming not only in increasing software quality, but also by giving a better understanding of the power and limitations of this paradigm. Since then, several authors have endorsed a similar task for other programming paradigms, in the hope of achieving similar benefits.<br />
	    In this paper we present a set of design patterns for Mdl-programs, a hybrid formalism combining several description logic knowledge bases via a logic program. These patterns are extensively applied in a natural way in a large-scale example that illustrates how their usage greatly simplifies some programming tasks, at the level of both development and extension.<br />
	    We also discuss some limitations of this formalism, examining some usual patterns in other programming paradigms that have no parallel in Mdl-programs.
	  </div>
	</div>

	<div class="pub" id="c14"><p>
	    <span class="numero">[14]</span>Sorting Networks: the End Game (with <a href="http://www.cs.bgu.ac.il/~mcodish/">M.&nbsp;Codish</a> and <a href="http://imada.sdu.dk/~petersk/">P.&nbsp;Schneider-Kamp</a>),
	    <a href="http://link.springer.com/chapter/10.1007%2F978-3-319-15579-1_52">&copy; Springer</a>
	    <a href="pubs/c14.pdf"><img width="16" height="16" alt="pdf" src="pdf.png" /></a>
	    <a href="pubs/c14.bib"><img width="26" height="16" alt="BiBTeX" src="bibtex.png" /></a><br />
	    in A.-H.&nbsp;Dediu, E.&nbsp;Formenti, C.&nbsp;Martín-Vide and B.&nbsp;Truthe (eds.),
	    <i>Language and Automata Theory and Applications, 9th International Conference, LATA 2015</i>,
	    LNCS <b>8977</b>:664-675. Springer, March 2015.<br />
	    <span class="doi">DOI 10.1007/978-3-319-15579-1_52</span></p>
	  <div class="abstract">
	    <b>Abstract.</b> This paper studies properties of the back end of a sorting network and illustrates the utility of these in the search for networks of optimal size or depth. All previous works focus on properties of the front end of networks and on how to apply these to break symmetries in the search. The new properties help shed understanding on how sorting networks sort and speed-up solvers for both optimal size and depth by an order of magnitude.
	  </div>
	</div>

	<div class="pub" id="c13"><p>
	    <span class="numero">[13]</span>Twenty-Five Comparators is Optimal when Sorting Nine Inputs (and Twenty-Nine for Ten) (with <a href="http://www.cs.bgu.ac.il/~mcodish/">M.&nbsp;Codish</a>, M.&nbsp;Frank and <a href="http://imada.sdu.dk/~petersk/">P.&nbsp;Schneider-Kamp</a>)
	    <a href="pubs/c13.pdf"><img width="16" height="16" alt="pdf" src="pdf.png" /></a>
	    <a href="pubs/c13.bib"><img width="26" height="16" alt="BiBTeX" src="bibtex.png" /></a><br />
	    <i>26th IEEE International Conference on Tools with Artificial Intelligence, ICTAI 2014</i>,
	    pages 186-193. IEEE, December 2014.<br />
	    <span class="doi">DOI 10.1109/ICTAI.2014.36</span></p>
	  <div class="abstract">
	    <b>Abstract.</b> This paper describes a computer-assisted non-existence proof of nine-input sorting networks consisting of 24 comparators, hence showing that the 25-comparator sorting network found by Floyd in 1964 is optimal. As a corollary, we obtain that the 29-comparator network found by Waksman in 1969 is optimal when sorting ten inputs.<br />
	    This closes the two smallest open instances of the optimal size sorting network problem, which have been open since the results of Floyd and Knuth from 1966 proving optimality for sorting networks of up to eight inputs.<br />
	    The proof involves a combination of two methodologies: one based on exploiting the abundance of symmetries in sorting networks, and the other, based on an encoding of the problem to that of satisfiability of propositional logic. We illustrate that, while each of these can single handed solve smaller instances of the problem, it is their combination which leads to an efficient solution for nine inputs.
	  </div>
	</div>

	<div class="pub" id="c12"><p>
	    <span class="numero">[12]</span>Information Flow within Relational Multi-context Systems (with <a href="http://www.di.fc.ul.pt/~gg/">G.&nbsp;Gaspar</a> and <a href="http://www.di.fc.ul.pt/~in/">I.&nbsp;Nunes</a>),
	    <a href="http://link.springer.com/chapter/10.1007%2F978-3-319-13704-9_8">&copy; Springer</a>
	    <a href="pubs/c12.pdf"><img width="16" height="16" alt="pdf" src="pdf.png" /></a>
	    <a href="pubs/c12.bib"><img width="26" height="16" alt="BiBTeX" src="bibtex.png" /></a><br />
	    in K.&nbsp;Janowicz, S.&nbsp;Schlobach, P.&nbsp;Lambrix and E.&nbsp;Hyvönen (eds.),
	    <i>Knowledge Engineering and Knowledge Management &ndash; 19th International Conference, EKAW 2014</i>,
	    LNAI <b>8876</b>:97-108. Springer, November 2014.<br />
	    <span class="doi">DOI 10.1007/978-3-319-13704-9_8</span></p>
	  <div class="abstract">
	    <b>Abstract.</b> Multi-context systems (MCSs) are an important framework for heterogeneous combinations of systems within the Semantic Web. In this paper, we propose generic constructions to achieve specific forms of interaction in a principled way, and sistematize some useful techniques to work with ontologies within an MCS. All these mechanisms are presented in the form of general-purpose design patterns. Their study also suggests new ways in which this framework can be further extended.
	  </div>
	</div>

	<div class="pub" id="c11"><p>
	    <span class="numero">[11]</span>The Quest for Optimal Sorting Networks: Efficient Generation of Two-Layer Prefixes (with <a href="http://www.cs.bgu.ac.il/~mcodish/">M.&nbsp;Codish</a> and <a href="http://imada.sdu.dk/~petersk/">P.&nbsp;Schneider-Kamp</a>)
	    <a href="pubs/c11.pdf"><img width="16" height="16" alt="pdf" src="pdf.png" /></a>
	    <a href="pubs/c11.bib"><img width="26" height="16" alt="BiBTeX" src="bibtex.png" /></a><br />
	    in F.&nbsp;Winkler, V.&nbsp;Negru, T.&nbsp;Ida, T.&nbsp;Jebelan, D.&nbsp;Petcu, S.M.&nbsp;Watt and D.&nbsp;Zaharie (eds.),
	    <i>16th International Symposium on Symbolic and Numerical Algorithms for Scientific Computing, SYNASC 2014</i>,
	    pages 359-366. IEEE, October 2014.<br />
	    <span class="doi">DOI 10.1109/SYNASC.2014.55</span></p>
	  <div class="abstract">
	    <b>Abstract.</b> Previous work identifying depth-optimal <i>n</i>-channel sorting networks for 9&le;<i>n</i>&le;16 is based on exploiting symmetries of the first two layers.  However, the naive generate-and-test approach typically applied does not scale. This paper revisits the problem of generating two-layer prefixes modulo symmetries. An improved notion of symmetry is provided and a novel technique based on regular languages and graph isomorphism is shown to generate the set of non-symmetric representations.  An empirical evaluation demonstrates that the new method outperforms the generate-and-test approach by orders of magnitude and easily scales until <i>n</i>=40.
	  </div>
	</div>

	<div class="pub" id="c10"><p>
	    <span class="numero">[10]</span>Optimizing Computation of Repairs from Active Integrity Constraints,
	    <a href="http://link.springer.com/chapter/10.1007/978-3-319-04939-7_18">&copy; Springer</a>
	    <a href="pubs/c10.pdf"><img width="16" height="16" alt="pdf" src="pdf.png" /></a>
	    <a href="pubs/c10.bib"><img width="26" height="16" alt="BiBTeX" src="bibtex.png" /></a><br />
	    in C.&nbsp;Beierle and C.&nbsp;Meghini (eds.),
	    <i>Foundations of Information and Knowledge Systems &ndash; 8th International Symposium, FoIKS 2014</i>,
	    LNCS <b>8367</b>:361-380. Springer, March 2014.<br />
	    <span class="doi">DOI 10.1007/978-3-319-04939-7_18</span></p>
	  <div class="abstract">
	    <b>Abstract.</b> Active integrity constraints (AICs) are a form of integrity constraints for databases that not only identify inconsistencies, but also suggest how these can be overcome.  The semantics for AICs defines different types of repairs, but deciding whether an inconsistent database can be repaired and finding possible repairs is a NP- or &Sigma;<sup>p</sup><sub>2</sub>-complete problem, depending on the type of repairs one has in mind.  In this paper, we introduce two different relations on AICs: an equivalence relation of <i>independence</i>, allowing the search to be parallelized among the equivalence classes, and a <i>precedence</i> relation, inducing a stratification that allows repairs to be built progressively.  Although these relations have no impact on the worst-case scenario, they can make significant difference in the practical computation of repairs for inconsistent databases.
	  </div>
	</div>

	<div class="pub" id="c09"><p>
	    <span class="numero">[9]</span>Description logics, Rules and Multi-context Systems (with R.&nbsp;Henriques and <a href="http://www.di.fc.ul.pt/~in/">I.&nbsp;Nunes</a>),
	    <a href="http://link.springer.com/chapter/10.1007/978-3-642-45221-5_18">&copy; Springer</a>
	    <a href="pubs/c09.pdf"><img width="16" height="16" alt="pdf" src="pdf.png" /></a>
	    <a href="pubs/c09.bib"><img width="26" height="16" alt="BiBTeX" src="bibtex.png" /></a><br />
	    in K.&nbsp;McMillan, A.&nbsp;Middeldorp, and A.&nbsp;Voronkov (eds.),
	    <i>Logic for Programming, Artificial Intelligence, and Reasoning, 19th International Conference, LPAR-19</i>,
	    LNCS <b>8312</b>:243-257. Springer, December 2013.<br />
	    <span class="doi">DOI 10.1007/978-3-642-45221-5_18</span></p>
	  <div class="abstract">
	    <b>Abstract.</b> The combination of rules and ontologies has been a fertile topic of research in the last years, with the proposal of several different systems that achieve this goal.  In this paper, we look at two of these mechanisms, Mdl-programs and multi-context systems, which address different aspects of this combination, and include different, incomparable programming constructs.  Despite this, we show that every Mdl-program can be transformed in a multi-context system, and this transformation relates the different semantics for each paradigm in a natural way.  As an application, we show how a set of design patterns for multi-context systems can be obtained from previous work on Mdl-programs.
	  </div>
	</div>

	<div class="pub" id="c08"><p>
	    <span class="numero">[8]</span>Patterns for Interfacing between Logic Programs and Multiple Ontologies (with <a href="http://www.di.fc.ul.pt/~in/">I.&nbsp;Nunes</a> and <a href="http://www.di.fc.ul.pt/~gg/">G.&nbsp;Gaspar</a>)
	    <a href="pubs/c08.pdf"><img width="16" height="16" alt="pdf" src="pdf.png" /></a>
	    <a href="pubs/c08.bib"><img width="26" height="16" alt="BiBTeX" src="bibtex.png" /></a><br />
	    in J.&nbsp;Filipe and J.&nbsp;Dietz (eds.), <i>International Conference on Knowledge Engineering and Ontology Development (KEOD2013)</i>, pages 58-69. SCITEPRESS, September 2013.<br />
	    <span class="doi">DOI 10.5220/0004544100580069</span></p>
	  <div class="abstract">
	    <b>Abstract.</b> Originally proposed in the mid-90s, design patterns for software development played a key role in object-oriented programming not only in increasing software quality, but also by giving a better understanding of the power and limitations of this paradigm.  Since then, several authors have endorsed a similar task for other programming paradigms, in the hope of achieving similar benefits.<br />
	    In this paper we discuss design patterns for hybrid semantic web systems combining several description logic knowledge bases via a logic program.  We introduce eight design patterns, grouped in three categories: three elementary patterns, which are the basic building blocks; four derived patterns, built from these; and a more complex pattern, the study of which can shed some insight in future syntactic developments of the underlying framework.  These patterns are extensively applied in a natural way in a large-scale example that illustrates how their usage greatly simplifies some programming tasks, at the level of both development and extension.<br />
	    We work in a generalization of dl-programs that supports several (possibly different) description logics, but the results presented are easily adaptable to other existing frameworks such as multi-context systems.
	  </div>
	</div>

	<div class="pub" id="c07"><p>
	    <span class="numero">[7]</span>Computing Repairs from Active Integrity Constraints (with P.&nbsp;Engrácia, <a href="http://www.di.fc.ul.pt/~gg/">G.&nbsp;Gaspar</a> and <a href="http://www.di.fc.ul.pt/~in/">I.&nbsp;Nunes</a>)
	    <a href="pubs/c07.pdf"><img width="16" height="16" alt="pdf" src="pdf.png" /></a>
	    <a href="pubs/c07.bib"><img width="26" height="16" alt="BiBTeX" src="bibtex.png" /></a><br />
	    in H.&nbsp;Wang and R.&nbsp;Banach (eds.),
	    <em>2013 International Symposium on Theoretical Aspects of Software Engineering (TASE 2013)</em>,
	    pages 183-190. IEEE, July 2013.<br />
	    <span class="doi">DOI 10.1109/TASE.2013.32</span></p>
	  <div class="abstract">
	    <b>Abstract.</b> Repairing an inconsistent knowledge base is a well-known problem for which several solutions have been proposed and implemented in the past.  In this paper, we start by looking at databases with active integrity constraints &ndash; consistency requirements that also indicate how the database should be updated when they are not met &ndash; as introduced by Caroprese <i>et al.</i>.  We show that the different kinds of repairs considered by those authors can be effectively computed by searching for leaves of specific kinds of trees.  Although these computations are in general not very efficient (deciding the existence of a repair for a given database with active integrity constraints is NP-complete), on average the algorithms we present make significant reductions on the number of nodes in the search tree.  Finally, these algorithms also give an operational characterization of different kinds of repairs that can be used when we extend the concept of active integrity constraints to the more general setting of knowledge bases.
	  </div>
	</div>

	<div class="pub" id="c06"><p>
	    <span class="numero">[6]</span>Behavioural Theory at Work: Program Transformations in a Service-Centred Calculus (with <a href="http://www.cs.unibo.it/~lanese/">I.&nbsp;Lanese</a>, <a href="http://www.di.fc.ul.pt/~fmartins/">F.&nbsp;Martins</a>, <a href="http://ctp.di.fct.unl.pt/~aravara/">A.&nbsp;Ravara</a>, and <a href="http://www.di.fc.ul.pt/~vv/">V.&nbsp;Vasconcelos</a>),
	    <a href="http://link.springer.com/chapter/10.1007/978-3-540-68863-1_5">&copy; Springer</a>
	    <a href="pubs/c06.pdf"><img width="16" height="16" alt="pdf" src="pdf.png" /></a>
	    <a href="pubs/c06.bib"><img width="26" height="16" alt="BiBTeX" src="bibtex.png" /></a><br />
	    in G.&nbsp;Barthe and F.&nbsp;de&nbsp;Boer (eds.),
	    <em>Proceedings of the 10th IFIP International Conference on Formal Methods for Open Object-based Distributed Systems (FMOODS'08)</em>,
	    LNCS <b>5051</b>:59-77. Springer, May 2008.<br />
	    <span class="doi">DOI 10.1007/978-3-540-68863-1_5</span></p>
	  <div class="abstract">
	    <b>Abstract.</b> We analyse the relationship between object-oriented modelling and session-based, service-oriented modelling, starting from a typical UML Sequence Diagram and providing a program transformation into a service-oriented model.  We also provide a similar transformation from session-based specifications into request-response specifications.  All transformations are specified in SSCC &ndash; a process calculus for modelling and analysing service-oriented systems &ndash; and proved correct with respect to a suitable form of behavioural equivalence (full weak bisimilarity).  Since the equivalence is proved to be compositional, results remain valid in arbitrary contexts.
	  </div>
	</div>

	<div class="pub" id="c05"><p>
	    <span class="numero">[5]</span>A Large-Scale Experiment in Executing Extracted Programs (with <a href="http://www.pps.univ-paris-diderot.fr/~letouzey/">P.&nbsp;Letouzey</a>)
	    <a href="pubs/c05.pdf"><img width="16" height="16" alt="pdf" src="pdf.png" /></a>
	    <a href="pubs/c05.bib"><img width="26" height="16" alt="BiBTeX" src="bibtex.png" /></a><br />
	    in J.&nbsp;Carette and W.M.&nbsp;Farmer (eds.),
	    <em>Proceedings of the 12th Symposium on the Integration of Symbolic Computation and Mechanized Reasoning (Calculemus 2005)</em>,
	    ENTCS <b>151</b>(1):75-191. Elsevier, 2006.<br />
	    <span class="doi">DOI 10.1016/j.entcs.2005.11.024</span></p>
	  <div class="abstract">
	    <b>Abstract.</b> It is a well-known fact that algorithms are often hidden inside mathematical proofs. If these proofs are formalized inside a proof assistant, then a mechanism called extraction can generate the corresponding programs automatically. Previous work has focused on the dificulties in obtaining a program from a formalization of the Fundamental Theorem of Algebra inside the Coq proof assistant. In theory, this program allows one to compute approximations of roots of polynomials. However, as we show in this work, there is currently a big gap between theory and practice. We study the complexity of the extracted program and analyze the reasons of its inefficiency, showing that this is a direct consequence of the approach used throughout the formalization.
	  </div>
	  <ul><li>Awarded best paper in the proceedings of CALCULEMUS 2005</li></ul>
	</div>

	<div class="pub" id="c04"><p>
	    <span class="numero">[4]</span>C-CoRN, the Constructive Coq Repository at Nijmegen (with <a href="http://www.cs.ru.nl/~herman/">H.&nbsp;Geuvers</a> and <a href="http://www.cs.ru.nl/~freek/">F.&nbsp;Wiedijk</a>),
	    <a href="http://link.springer.com/chapter/10.1007/978-3-540-27818-4_7">&copy; Springer</a>
	    <a href="pubs/c04.pdf"><img width="16" height="16" alt="pdf" src="pdf.png" /></a>
	    <a href="pubs/c04.bib"><img width="26" height="16" alt="BiBTeX" src="bibtex.png" /></a><br />
	    in A.&nbsp;Asperti, G.&nbsp;Bancerek and A.&nbsp;Trybulec (eds.),
	    <em>Mathematical Knowledge Management, Third International Conference, MKM 2004</em>,
	    LNCS <b>3119</b>:88-103. Springer, September 2004.<br />
	    <span class="doi">DOI 10.1007/978-3-540-27818-4_7</span></p>
	  <div class="abstract">
	    <b>Abstract.</b> We present C-CoRN, the Constructive Coq Repository at Nijmegen. It consists of a library of constructive algebra and analysis, formalized in the theorem prover Coq. In this paper we explain the structure, the contents and the use of the library. Moreover we discuss the motivation and the (possible) applications of such a library.
	  </div>
	</div>

	<div class="pub" id="c03"><p>
	    <span class="numero">[3]</span>Hierarchical Reflection (with <a href="http://www.cs.ru.nl/~freek/">F.&nbsp;Wiedijk</a>),
	    <a href="http://link.springer.com/chapter/10.1007/978-3-540-30142-4_5">&copy; Springer</a>
	    <a href="pubs/c03.pdf"><img width="16" height="16" alt="pdf" src="pdf.png" /></a>
	    <a href="pubs/c03.bib"><img width="26" height="16" alt="BiBTeX" src="bibtex.png" /></a><br />
	    in K.&nbsp;Slind, A.&nbsp;Bunker and G.&nbsp;Gopalakrishnan (eds.),
	    <em>Theorem Proving in Higher Order Logics (17th International Conference, TPHOLs 2004)</em>,
	    LNCS <b>3223</b>:66-81. Springer, September 2004.<br />
	    <span class="doi">DOI 10.1007/978-3-540-30142-4_5</span></p>
	  <div class="abstract">
	    <b>Abstract.</b> The technique of reflection is a way to automate proof construction in type theoretical proof assistants. Reflection is based on the definition of a type of syntactic expressions that gets interpreted in the domain of discourse. By allowing the interpretation function to be partial or even a relation one gets a more general method known as &quot;partial reflection&quot;. In this paper we show how one can take advantage of the partiality of the interpretation to uniformly define a family of tactics for equational reasoning that will work in different algebraic structures. The tactics then follow the hierarchy of those algebraic structures in a natural way.
	  </div>
	</div>

	<div class="pub" id="c02"><p>
	    <span class="numero">[2]</span>Program Extraction from Large Proof Developments (with <a href="http://www.cs.ru.nl/~spitters/">B.&nbsp;Spitters</a>),
	    <a href="http://link.springer.com/chapter/10.1007/10930755_14">&copy; Springer</a>
	    <a href="pubs/c02.pdf"><img width="16" height="16" alt="pdf" src="pdf.png" /></a>
	    <a href="pubs/c02.bib"><img width="26" height="16" alt="BiBTeX" src="bibtex.png" /></a><br />
	    in D.&nbsp;Basin and B.&nbsp;Wolff (eds.),
	    <em>Theorem Proving in Higher Order Logics (16th International Conference, TPHOLs 2003)</em>,
	    LNCS <b>2758</b>:205-220. Springer, September 2003.<br />
	    <span class="doi">DOI 10.1007/10930755_14.</span></p>
	  <div class="abstract">
	    <b>Abstract.</b> It is well known that mathematical proofs often contain (abstract) algorithms, but although these algorithms can be understood by a human, it still takes a lot of time and effort to implement these algorithms on a computer; moreover, one runs the risk of making mistakes in the process.<br />
	    From a fully formalized constructive proof one can automatically obtain a computer implementation of such an algorithm together with a proof that the program is correct. As an example we consider the fundamental theorem of algebra which states that every non-constant polynomial has a root. This theorem has been fully formalized in the Coq proof assistant. Unfortunately, when we first tried to extract a program, the computer ran out of resources.<br />
	    We will discuss how we used logical techniques to make it possible to extract a feasible program. This example is used as a motivation for a broader perspective on how the formalization of mathematics should be done with program extraction in mind.
	  </div>
	</div>

	<div class="pub" id="c01"><p>
	    <span class="numero">[1]</span>A Constructive Formalization of the Fundamental Theorem of Calculus,
	    <a href="http://link.springer.com/chapter/10.1007/3-540-39185-1_7">&copy; Springer</a>
	    <a href="pubs/c01.pdf"><img width="16" height="16" alt="pdf" src="pdf.png" /></a>
	    <a href="pubs/c01.bib"><img width="26" height="16" alt="BiBTeX" src="bibtex.png" /></a><br />
	    in H.&nbsp;Geuvers and F.&nbsp;Wiedijk (eds.),
	    <em>Types for Proof and Programs (TYPES 2002)</em>,
	    LNCS <b>2646</b>:108-126. Springer, April 2003.<br />
	    <span class="doi">DOI 10.1007/3-540-39185-1_7</span></p>
	  <div class="abstract">
	    <b>Abstract.</b> We have finished a constructive formalization in the theorem prover Coq of the Fundamental Theorem of Calculus, which states that differentiation and integration are inverse processes.  In this formalization, we have closely followed Bishop's work [1]. In this paper, we describe the formalization in some detail, focusing on how some of Bishop's original proofs had to be refined, adapted or redone from scratch.<br />
	    [1] Bishop, E., <em>Foundations of Constructive Analysis</em>, McGraw-Hill Book Company, 1967.
	  </div>
	</div>

	<h4>Peer-reviewed articles in workshop proceedings</h4>

	<div class="pub" id="w15"><p>
	    <span class="numero">[15]</span>Hypothetical Query Answering over Continuous Data Streams (with <a href="http://www.di.fc.ul.pt/~gg/">G.&nbsp;Gaspar</a> and <a href="http://www.di.fc.ul.pt/~in/">I.&nbsp;Nunes</a>)
	    <a href="pubs/w15.pdf"><img width="16" height="16" alt="pdf" src="pdf.png" /></a>
	    <a href="pubs/w15.bib"><img width="26" height="16" alt="BiBTeX" src="bibtex.png" /></a><br />
	    in <i>Days in Logic 2024, Abstracts</i>,
	    Lisbon, 2024</p>
	  <div class="abstract">
	    <b>Abstract.</b> Extended abstract.</div>
	</div>

	<div class="pub" id="w14"><p>
	    <span class="numero">[14]</span>Approximation Fixpoint Theory in Coq with an Application to Logic Programming (with <a href="http://bartbogaerts.eu/index.php">B.&nbsp;Bogaerts</a>),
	    <a href="http://link.springer.com/chapter/10.1007/978-3-031-61716-4_5">&copy; Springer</a>
	    <a href="pubs/w14.pdf"><img width="16" height="16" alt="pdf" src="pdf.png" /></a>
	    <a href="pubs/w14.bib"><img width="26" height="16" alt="BiBTeX" src="bibtex.png" /></a><br />
	    in V.&nbsp;Capretta, R.&nbsp;Krebbers and F.&nbsp;Wiedijk (eds.), <i>Logics and Type Systems in Theory and Practice &ndash; Essays Dedicated to Herman Geuvers on The Occasion of His 60th Birthday</i>,
	    LNCS <b>14560</b>:84-99. Springer, May 2024.<br />
	    <span class="doi">DOI 10.1007/978-3-031-61716-4_5</span></p>
	  <div class="abstract">
	    <b>Abstract.</b> Approximation Fixpoint Theory (AFT) is an abstract framework based on lattice theory that unifies semantics of different nonmonotonic logic. AFT has revealed itself to be applicable in a variety of new domains within knowledge representation. In this work, we present a formalisation of the key constructions and results of AFT in the Coq theorem prover, together with a case study illustrating its application to propositional logic programming.</div>
	</div>

	<div class="pub" id="w13"><p>
	    <span class="numero">[13]</span>Choreographic Programming in Coq (extended abstract, with L.&nbsp;Lugovic, <a href="http://www.fabriziomontesi.com/">F.&nbsp;Montesi</a>, M.&nbsp;Peressotti and R.R.&nbsp;Rasmussen)
	    <a href="pubs/w13.pdf"><img width="16" height="16" alt="pdf" src="pdf.png" /></a>
	    <a href="pubs/w13.bib"><img width="26" height="16" alt="BiBTeX" src="bibtex.png" /></a><br />
	    in E.H.&nbsp;Reyes and A.&nbsp;Villanueva (eds.),
	    <em>TYPES 2023 (Abstracts)</em>, pages 73-76,
	    Valencia, 2023.
	  </p>
	  <div class="abstract">
	    <b>Abstract.</b> Extended abstract.
	  </div>
	</div>

	<div class="pub" id="w12"><p>
	    <span class="numero">[12]</span>Formalising Approximation Fixpoint Theory (with <a href="http://bartbogaerts.eu/index.php">B.&nbsp;Bogaerts</a>)
	    <a href="pubs/w12.pdf"><img width="16" height="16" alt="pdf" src="pdf.png" /></a>
	    <a href="pubs/w12.bib"><img width="26" height="16" alt="BiBTeX" src="bibtex.png" /></a><br />
	    in <i>Days in Logic 2022, Abstracts</i>,
	    Faro, 2022</p>
	  <div class="abstract">
	    <b>Abstract.</b> Extended abstract.</div>
	</div>

	<div class="pub" id="w11"><p>
	    <span class="numero">[11]</span>A Formalisation of Approximation Fixpoint Theory (with <a href="http://bartbogaerts.eu/index.php">B.&nbsp;Bogaerts</a>)
	    <a href="pubs/w11.pdf"><img width="16" height="16" alt="pdf" src="pdf.png" /></a>
	    <a href="pubs/w11.bib"><img width="26" height="16" alt="BiBTeX" src="bibtex.png" /></a><br />
	    in H.&nbsp;Basold (ed.),
	    <em>TYPES 2021 (Abstracts)</em>,
	    Leiden, 2021.
	  </p>
	  <div class="abstract">
	    <b>Abstract.</b> Extended abstract.
	  </div>
	</div>

	<div class="pub" id="w10"><p>
	    <span class="numero">[10]</span>Choreographies in Coq (extended abstract, with <a href="http://www.fabriziomontesi.com/">F.&nbsp;Montesi</a> and M.&nbsp;Peressotti)
	    <a href="pubs/w10.pdf"><img width="16" height="16" alt="pdf" src="pdf.png" /></a>
	    <a href="pubs/w10.bib"><img width="26" height="16" alt="BiBTeX" src="bibtex.png" /></a><br />
	    in M.&nbsp;Bezem (ed.),
	    <em>TYPES 2019 (Abstracts)</em>,
	    Oslo, 2019.
	  </p>
	  <div class="abstract">
	    <b>Abstract.</b> Extended abstract.
	  </div>
	</div>

	<div class="pub" id="w09"><p>
	    <span class="numero">[9]</span>The Boolean Pythagorean Triples Problem in Coq (extended abstract, with J.&nbsp;Marques-Silva and <a href="http://imada.sdu.dk/~petersk/">P.&nbsp;Schneider-Kamp</a>)
	    <a href="pubs/w09.pdf"><img width="16" height="16" alt="pdf" src="pdf.png" /></a>
	    <a href="pubs/w09.bib"><img width="26" height="16" alt="BiBTeX" src="bibtex.png" /></a><br />
	    in A.&nbsp;Kaposi (ed.),
	    <em>TYPES 2017 (Abstracts)</em>,
	    pages 47-48, Budapest, 2017.
	  </p>
	  <div class="abstract">
	    <b>Abstract.</b> Extended abstract.
	  </div>
	</div>

	<div class="pub" id="w08"><p>
	    <span class="numero">[8]</span>On Asynchrony and Choreographies (with <a href="http://www.fabriziomontesi.com/">F.&nbsp;Montesi</a>)
	    <a href="pubs/w08.pdf"><img width="16" height="16" alt="pdf" src="pdf.png" /></a>
	    <a href="pubs/w08.bib"><img width="26" height="16" alt="BiBTeX" src="bibtex.png" /></a><br />
	    in M.&nbsp;Bartoletti, L.&nbsp;Bocchi, L.&nbsp;Henrio and S.&nbsp;Knight (eds.),
	    <i>Proceedings 10th Interaction and Concurrency Experience</i>.
	    EPTCS <b>261</b>:76-90. Open Publishing Association, 2017.<br />
	    <span class="doi">DOI 10.4204/EPTCS.261.8</span></p>
	  <div class="abstract">
	    <b>Abstract.</b> Choreographic Programming is a paradigm for the development of concurrent software, where deadlocks are prevented syntactically.  However, choreography languages are typically synchronous, whereas many real-world systems have asynchronous communications.  Previous attempts at enriching choreographies with asynchrony rely on <i>ad-hoc</i> constructions, whose adequacy is only argued informally.  In this work, we formalise the properties that an asynchronous semantics for choreographies should have: messages can be sent without the intended receiver being ready, and all sent messages are eventually received.  We explore how out-of-order execution, used in choreographies for modelling concurrency, can be exploited to endow choreographies with an asynchronous semantics. Our approach satisfies the properties we identified.  We show how our development yields a pleasant correspondence with FIFO-based asynchronous messaging, modelled in a process calculus, and discuss how it can be adopted in more complex choreography models.</div>
        </div>

	<div class="pub" id="w07"><p>
	    <span class="numero">[7]</span>That's Enough: Asynchrony with Standard Choreography Primitives (with <a href="http://www.fabriziomontesi.com/">F.&nbsp;Montesi</a>)
	    <a href="pubs/w07.pdf"><img width="16" height="16" alt="pdf" src="pdf.png" /></a>
	    <a href="pubs/w07.bib"><img width="26" height="16" alt="BiBTeX" src="bibtex.png" /></a><br />
	    in C.&nbsp;Caleiro, F.&nbsp;Dionísio, P.&nbsp;Gouveia, P.&nbsp;Mateus and J.&nbsp;Rasga (eds.),
	    <i>Logic and Computation: Essays in Honour of Amílcar Sernadas</i>, volume 33 of <i>Tributes</i>,
	    pages 125-142, College Publications, 2017.<!--<br />
	    <span class="doi">DOI 10.1007/978-3-319-39570-8_8</span>--></p>
	  <div class="abstract">
	    <b>Abstract.</b> Choreographies are widely used for the specification of concurrent and distributed software architectures.  Since asynchronous communications are ubiquitous in real-world systems, previous works have proposed different approaches for the formal modelling of asynchrony in choreographies.  Such approaches typically rely on ad-hoc syntactic terms or semantics for capturing the concept of messages in transit, yielding different formalisms that have to be studied separately.<br />
	    In this work, we take a different approach, and show that such extensions are not needed to reason about asynchronous communications in choreographies. Rather, we demonstrate how a standard choreography calculus already has all the needed expressive power to encode messages in transit (and thus asynchronous communications) through the primitives of process spawning and name mobility.  The practical consequence of our results is that we can reason about real-world systems within a choreography formalism that is simpler than those hitherto proposed.</div>
        </div>

	<div class="pub" id="w06"><p>
	    <span class="numero">[6]</span>Foundations of Choreographies (with <a href="http://www.fabriziomontesi.com/">F.&nbsp;Montesi</a>)
	    <a href="pubs/w06.pdf"><img width="16" height="16" alt="pdf" src="pdf.png" /></a>
	    <a href="pubs/w06.bib"><img width="26" height="16" alt="BiBTeX" src="bibtex.png" /></a><br />
	    in S.&nbsp;Gay and A.&nbsp;Ravara (eds.), <em>BETTY 2016 (Proceedings)</em>, Lisbon, 2016.
	  </p>
	  <div class="abstract">
	    <b>Abstract.</b> Extended abstract.
	  </div>
	</div>

	<div class="pub" id="w05"><p>
	    <span class="numero">[5]</span>A Formalized Checker for Size-Optimal Sorting Networks (extended abstract, with <a href="http://imada.sdu.dk/~petersk/">P.&nbsp;Schneider-Kamp</a>)
	    <a href="pubs/w05.pdf"><img width="16" height="16" alt="pdf" src="pdf.png" /></a>
	    <a href="pubs/w05.bib"><img width="26" height="16" alt="BiBTeX" src="bibtex.png" /></a><br />
	    in T.&nbsp;Uustalu (ed.),
	    <em>TYPES 2015 (Abstracts)</em>,
	    pages 42-43, Tallinn, 2015.
	  </p>
	  <div class="abstract">
	    <b>Abstract.</b> Extended abstract.
	  </div>
	</div>

	<div class="pub" id="w04"><p>
	    <span class="numero">[4]</span>Tighter integration in dl-programs (with P.&nbsp;Engrácia, <a href="http://www.di.fc.ul.pt/~gg/">G.&nbsp;Gaspar</a>, R.&nbsp;Henriques, <a href="http://www.di.fc.ul.pt/~in/">I.&nbsp;Nunes</a> and D.&nbsp;Santos)
	    <a href="pubs/w04.pdf"><img width="16" height="16" alt="pdf" src="pdf.png" /></a>
	    <a href="pubs/w04.bib"><img width="26" height="16" alt="BiBTeX" src="bibtex.png" /></a><br />
	    in J.&nbsp;Cachopo, B.&nbsp;Sousa Santos (eds.)
	    <em>INForum 2013, Atas do 5&ordm; Simpósio de Informática</em>,
	    pages 457-468, Évora, 2013.
	  </p>
	  <div class="abstract">
	    <b>Abstract.</b> We introduce a mechanism called lifting to share predicates between the two components of a dl-program, integrating them in a tighter way.  Using lifting, one can reason about the predicates being shared both via the description logic knowledge base and via Datalog-style rules, and the deductions one makes are automatically reflected globally on both components.  This is a capability not directly present in dl-programs, since changes to the knowledge base only affect the queries where they occur.  We show that lifting has nice theoretical properties, making it suitable for modular design of dl-programs.  Furthermore, dl-program processors can easily incorporate lifting as a new operator, and we have extended <code>dlvhex</code> to work with dl-programs with lifting.
	  </div>
	</div>

	<div class="pub" id="w03"><p>
	    <span class="numero">[3]</span>C-CoRN: the Constructive Coq Repository at Nijmegen (with <a href="http://www.cs.ru.nl/~herman/">H.&nbsp;Geuvers</a> and <a href="http://www.cs.ru.nl/~freek/">F.&nbsp;Wiedijk</a>)
	    <a href="pubs/w03.pdf"><img width="16" height="16" alt="pdf" src="pdf.png" /></a>
	    <a href="pubs/w03.bib"><img width="26" height="16" alt="BiBTeX" src="bibtex.png" /></a><br />
	    in <em>Dutch Proof Tools Day 2004 (Program + Proceedings)</em>,
	    Research Report NIII-R0429, NIII, University of Nijmegen, June 2004.
	  </p>
	  <div class="abstract">
	    <b>Abstract.</b> Early version of <a href="#c04">[4]</a>.
	  </div>
	</div>

	<div class="pub" id="w02"><p>
	    <span class="numero">[2]</span>Towards Automation of Real Analysis in Coq (extended abstract)
	    <a href="pubs/w02.pdf"><img width="16" height="16" alt="pdf" src="pdf.png" /></a>
	    <a href="pubs/w02.bib"><img width="26" height="16" alt="BiBTeX" src="bibtex.png" /></a>
	    (poster <a href="pubs/200210-poster.pdf"><img width="16" height="16" alt="pdf" src="pdf.png" /></a>)<br />
	    in J.&nbsp;Zimmer and C.&nbsp;Benzmüller (eds.),
	    <em>CALCULEMUS Autumn School 2002: Student Poster Abstracts</em>, 
	    SEKI Report, Saarbrücken, 2002.
	  </p>
	  <div class="abstract">
	    <b>Abstract.</b> Extended abstract (see poster).
	  </div>
	</div>

	<div class="pub" id="w01"><p>
	    <span class="numero">[1]</span>Formalizing Real Calculus in Coq
	    <a href="pubs/w01.pdf"><img width="16" height="16" alt="pdf" src="pdf.png" /></a>
	    <a href="pubs/w01.bib"><img width="26" height="16" alt="BiBTeX" src="bibtex.png" /></a><br />
	    in V.&nbsp;Carre&ntilde;o, C.&nbsp;Mu&ntilde;oz and S.&nbsp;Tahar (eds.),
	    <em>Theorem Proving in Higher Order Logics</em>,
	    pages 158-166, NASA Conference Proceedings, Hampton VA, 2002.
	  </p>
	  <div class="abstract">
	    <b>Abstract.</b> We have finished a constructive formalization in the theorem prover Coq of the Fundamental Theorem of Calculus, which states that differentiation and integration are inverse processes. This formalization is built upon the library of constructive algebra created in the FTA (Fundamental Theorem of Algebra) project, which is extended with results about the real numbers, namely about (power) series.<br />
	    Two important issues that arose in this formalization and which will be discussed in this paper are partial functions (different ways of dealing with this concept and the advantages of each different approach) and the high level tactics that were developed in parallel with the formalization (which automate several routine procedures involving results about real-valued functions).
	  </div>
	</div>

	<!--<h4>Submitted Publications</h4>-->

	<!--<h4>Other publications with refereeing</h4>-->

	<h4>Technical reports</h4>

	<div class="pub" id="tr07"><p>
	    <span class="numero">[7]</span>Information Flow within Relational Multi-context Systems (with <a href="http://www.di.fc.ul.pt/~gg/">G.&nbsp;Gaspar</a> and <a href="http://www.di.fc.ul.pt/~in/">I.&nbsp;Nunes</a>),
	    <a href="pubs/tr07.pdf"><img width="16" height="16" alt="pdf" src="pdf.png" /></a>
	    <a href="pubs/tr07.bib"><img width="26" height="16" alt="BiBTeX" src="bibtex.png" /></a><br />
	    Technical Report 2014;03, Faculdade de Ci&ecirc;ncias da Universidade de Lisboa, September 2014.
	  </p>
	  <div class="abstract">
	    <b>Abstract.</b> Multi-context systems (MCSs) are an important framework for heterogeneous combinations of systems within the Semantic Web. In this paper, we propose generic constructions to achieve specific forms of interaction in a principled way, and sistematize some useful techniques to work with ontologies within an MCS. All these mechanisms are presented in the form of general-purpose design patterns. Their study also suggests new ways in which this framework can be further extended.
	  </div>
	</div>

	<div class="pub" id="tr06"><p>
	    <span class="numero">[6]</span>Viewing dl-programs as multi-context systems (with R.&nbsp;Henriques and <a href="http://www.di.fc.ul.pt/~in/">I.&nbsp;Nunes</a>)
	    <a href="pubs/tr06.pdf"><img width="16" height="16" alt="pdf" src="pdf.png" /></a>
	    <a href="pubs/tr06.bib"><img width="26" height="16" alt="BiBTeX" src="bibtex.png" /></a><br />
	    Technical Report 2013;05, Faculdade de Ci&ecirc;ncias da Universidade de Lisboa, April 2013.
	  </p>
	  <div class="abstract">
	    <b>Abstract.</b> The combination of logic programs and description logic knowledge bases has been a fertile topic of research in the last years, with the proposal of several different systems that achieve this goal.  In this paper, we look at two of these mechanisms, dl-programs and multi-context systems, which address different aspects of this combination, and include different, incomparable programming constructs.  Despite this, we show that every dl-program can be transformed into a multi-context system in such a way that the different semantics for each paradigm are naturally related.  As a consequence, many useful constructions developed within the framework of dl-programs may be automatically translated to equivalent constructions in the setting of multi-context systems.
	  </div>
	</div>

	<div class="pub" id="tr05"><p>
	    <span class="numero">[5]</span>Patterns for Programming in the Semantic Web (with <a href="http://www.di.fc.ul.pt/~in/">I.&nbsp;Nunes</a> and  <a href="http://www.di.fc.ul.pt/~gg/">G.&nbsp;Gaspar</a>)
	    <a href="pubs/tr05.pdf"><img width="16" height="16" alt="pdf" src="pdf.png" /></a>
	    <a href="pubs/tr05.bib"><img width="26" height="16" alt="BiBTeX" src="bibtex.png" /></a><br />
	    Technical Report 2012;06, Faculdade de Ci&ecirc;ncias da Universidade de Lisboa, October 2012.
	  </p>
	  <div class="abstract">
	    <b>Abstract.</b> Originally proposed in the mid-90s, design patterns for software development played a key role in object-oriented programming not only in increasing software quality, but also by giving a better understanding of the power and limitations of this paradigm.  Since then, several authors have endorsed a similar task for other programming paradigms, in the hope of achieving similar benefits.<br />
	    In this paper we discuss design patterns for the Semantic Web, giving new insights on how existing programming frameworks can be used in a systematic way to design large-scale systems.  The common denominator between these frameworks is the combination between different reasoning systems, namely description logics and logic programming.  Therefore, we chose to work in a generalization of dl-programs that supports several (possibly different) description logics, expecting that our results will be easily adapted to other existing frameworks such as multi-context systems.  This study also suggests new constructs to enforce legibility and internal structure of logic-based Semantic Web programs.
	  </div>
	</div>

	<div class="pub" id="tr04"><p>
	    <span class="numero">[4]</span>Achieving tightness in dl-programs (with P.&nbsp;Engrácia, <a href="http://www.di.fc.ul.pt/~gg/">G.&nbsp;Gaspar</a> and <a href="http://www.di.fc.ul.pt/~in/">I.&nbsp;Nunes</a>)
	    <a href="pubs/tr04.pdf"><img width="16" height="16" alt="pdf" src="pdf.png" /></a>
	    <a href="pubs/tr04.bib"><img width="26" height="16" alt="BiBTeX" src="bibtex.png" /></a><br />
	    Technical Report 2012;03, Faculdade de Ci&ecirc;ncias da Universidade de Lisboa, July 2012.
	  </p>
	  <div class="abstract">
	    <b>Abstract.</b> In the field of the combination between description logics and rule-based reasoning systems, dl-programs have proved to be a very successful mechanism.  One of their recognized shortcomings, however, is their lack of full tightness: the language constructs that feed data from the logic program have a local effect, leaving the knowledge base essentially unchanged throughout.  In this paper, we present a construction that we call <em>lifting</em>, which allows predicates to be fully shared between the two components of a dl-program in a systematic way, and show how lifting can be used to provide intuitive solutions to a number of everyday reasoning problems involving the verification of integrity constraints and the implementation of default rules.  This construction preserves consistency of the underlying knowledge base and complexity of the overall system.  Furthermore, the resulting semantics of default rules has a natural interpretation under the original Reiter semantics.
	  </div>
	</div>

	<div class="pub" id="tr03"><p>
	    <span class="numero">[3]</span>Bisimulations in SSCC (with <a href="http://http://www.cs.unibo.it/~lanese">I.&nbsp;Lanese</a>, <a href="http://http://www.di.fc.ul.pt/~fmartins">F.&nbsp;Martins</a>, <a href="http://ctp.di.fct.unl.pt/~aravara/">A.&nbsp;Ravara</a>, <a href="http://http://www.di.fc.ul.pt/~vv">V.&nbsp;Vasconcelos</a>)
	    <a href="pubs/tr03.pdf"><img width="16" height="16" alt="pdf" src="pdf.png" /></a>
	    <a href="pubs/tr03.bib"><img width="26" height="16" alt="BiBTeX" src="bibtex.png" /></a><br />
	    Technical Report 07-37, Faculdade de Ci&ecirc;ncias da Universidade de Lisboa, December 2007.
	  </p>
	  <div class="abstract">
	    <b>Abstract.</b> This report studies different definitions of bisimulation within the Stream-Based Service-Centered Calculus (SSCC) and shows that both strong and weak ground bisimulation are non-input congruences.
	  </div>
	</div>

	<div class="pub" id="tr02"><p>
	    <span class="numero">[2]</span>The Essence of Proofs when Fibring Sequent Calculi (with <a href="http://sqig.math.ist.utl.pt/css/">C.&nbsp;Sernadas</a>)
	    <a href="pubs/tr02.pdf"><img width="16" height="16" alt="pdf" src="pdf.png" /></a>
	    <a href="pubs/tr02.bib"><img width="26" height="16" alt="BiBTeX" src="bibtex.png" /></a><br />
	    Technical Report, CLC, Lisbon, Portugal, 2005
	  </p>
	  <div class="abstract">
	    <b>Abstract.</b> Extended abstract.
	  </div>
	</div>

	<div class="pub" id="tr01"><p>
	    <span class="numero">[1]</span>Equational Reasoning in Algebraic Structures: a Complete Tactic (with <a href="http://www.cs.ru.nl/~freek/">F.&nbsp;Wiedijk</a>)
	    <a href="pubs/tr01.pdf"><img width="16" height="16" alt="pdf" src="pdf.png" /></a>
	    <a href="pubs/tr01.bib"><img width="26" height="16" alt="BiBTeX" src="bibtex.png" /></a><br />
	    Research Report NIII-R0431, NIII, University of Nijmegen, July 2004.
	  </p>
	  <div class="abstract">
	    <b>Abstract.</b> We present <code>rational</code>, a Coq tactic for equational reasoning in abelian groups, commutative rings, and fields. We give an mathematical description of the method that this tactic uses, which abstracts from Coq specifics.<br />
	    We prove that the method that <code>rational</code> uses is correct, and that it is complete for groups and rings. Completeness means that the method succeeds in proving an equality if and only if that equality is provable from the the group/ring axioms. Finally we characterize in what way our method is incomplete for fields.
	  </div>
	</div>

	<h4>Theses</h4>

	<div class="pub" id="t2"><p>
	    <span class="numero">[2]</span>Constructive Real Analysis: a Type-Theoretical Formalization and Applications
	    <a href="pubs/phd.ps.gz"><img width="16" height="16" alt="ps" src="ps.gif" /></a>
	    <a href="pubs/phd.pdf"><img width="16" height="16" alt="pdf" src="pdf.png" /></a>
	    <a href="pubs/phd.bib"><img width="26" height="16" alt="BiBTeX" src="bibtex.png" /></a><br />
	    PhD thesis, University of Nijmegen, June 2004.
	  </p>
	  <div class="abstract">
	    <b>Abstract.</b> A description of the whys and hows of the construction of a library of formalized mathematics, addressing among others issues of representation of concepts, automation, differences between the informal and formal proofs and applications.
	  </div>
	</div>

	<div class="pub" id="t1"><p>
	    <span class="numero">[1]</span>Lambda Calculus and Beyond
	    <a href="pubs/tfc.ps"><img width="16" height="16" alt="ps" src="ps.gif" /></a>
	    <a href="pubs/tfc.pdf"><img width="16" height="16" alt="pdf" src="pdf.png" /></a>
	    <a href="pubs/tfc.bib"><img width="26" height="16" alt="BiBTeX" src="bibtex.png" /></a><br />
	    Diploma thesis, Instituto Superior Técnico, Lisbon, June 2001.
	  </p>
	  <div class="abstract">
	    <b>Abstract.</b>A survey of Lambda Calculus and related questions, including computational completion of combinatory algebras, Pure Type Systems and the Curry&ndash;Howard isomorphism.
	  </div>
	</div>

	<h4>Books (editor)</h4>

	<div class="pub" id="b4"><p>
	    <span class="numero">[4]</span>Números, cirurgias e nós de gravata: 10 anos de Seminário Diagonal no IST (with J.P.&nbsp;Boavida, R.&nbsp;Carpentier, E.&nbsp;Grifo, P.&nbsp;Gonçalves, D.&nbsp;Henriques and A.R.&nbsp;Pires)
	    <a href="pubs/b4.bib"><img width="26" height="16" alt="BiBTeX" src="bibtex.png" /></a><br />
	    Lisbon, 2012.
	  </p>
	</div>

	<div class="pub" id="b3"><p>
	    <span class="numero">[3]</span>Seminário Diagonal&ndash;Proceedings IST, III (with A.&nbsp;Cannas da Silva, N.&nbsp;Freitas, J.D.&nbsp;Silva and A.&nbsp;Vasconcelos)
	    <a href="http://www.math.ist.utl.pt/diagonal/proc2006.pdf"><img width="16" height="16" alt="pdf" src="pdf.png" /></a>
	    <a href="pubs/b3.bib"><img width="26" height="16" alt="BiBTeX" src="bibtex.png" /></a><br />
	    Lisbon, 2007.
	  </p>
	</div>

	<div class="pub" id="b2"><p>
	    <span class="numero">[2]</span>Seminário Diagonal&ndash;Proceedings IST, II (with A.&nbsp;Cannas da Silva, R.&nbsp;Gonçalves, J.&nbsp;Pimentel Nunes, A.R.&nbsp;Pires, T.&nbsp;Reis, P.M.&nbsp;Resende and J.&nbsp;Silva)
	    <a href="pubs/b2.bib"><img width="26" height="16" alt="BiBTeX" src="bibtex.png" /></a><br />
	    Lisbon, 2005.
	  </p>
	</div>

	<div class="pub" id="b1"><p>
	    <span class="numero">[1]</span>Seminário Diagonal&ndash;Proceedings IST 2000-01 (with J.P.&nbsp;Boavida, A.&nbsp;Cannas da Silva, J.&nbsp;Fachada and P.&nbsp;Resende)
	    <a href="http://www.math.ist.utl.pt/diagonal/proc2001.pdf"><img width="16" height="16" alt="pdf" src="pdf.png" /></a>
	    <a href="pubs/b1.bib"><img width="26" height="16" alt="BiBTeX" src="bibtex.png" /></a><br />
	    Lisbon, 2001.
	  </p>
	</div>

	<h4>Scientific dissemination</h4>

	<div class="pub" id="o6"><p>
	    <span class="numero">[6]</span>Chatbots er dårlige til at løse problemer og gåder
	    <a href="pubs/o6.pdf"><img width="16" height="16" alt="pdf" src="pdf.png" /></a>
	    <a href="pubs/o6.bib"><img width="26" height="16" alt="BiBTeX" src="bibtex.png" /></a><br />
	    <a href="https://videnskab.dk/teknologi/chatbots-er-ikke-saa-intelligente-som-de-fremstaar/">Videnskab.dk</a>, December 2024.
	  </p>
	  <div class="abstract">
	    <b>Abstract.</b> Kunstig intelligens har svært ved at begrunde sine svar og løse problemer. Men nu er forskere ved at gøre chatbots bedre ved brug af metoden ‘selvopdagelse’.</div>
	</div>

	<div class="pub" id="o5"><p>
	    <span class="numero">[5]</span>Chatbots er ikke så intelligente, som de fremstår
	    <a href="pubs/o5.pdf"><img width="16" height="16" alt="pdf" src="pdf.png" /></a>
	    <a href="pubs/o5.bib"><img width="26" height="16" alt="BiBTeX" src="bibtex.png" /></a><br />
	    <a href="https://videnskab.dk/teknologi/chatbots-er-ikke-saa-intelligente-som-de-fremstaar/">Videnskab.dk</a>, March 2024.
	  </p>
	  <div class="abstract">
	    <b>Abstract.</b> AI-programmer som for eksempel ChatGPT minder om papegøjer, der gentager ord uden at forstå dem.</div>
	</div>

	<div class="pub" id="o4"><p>
	    <span class="numero">[4]</span>Generative AI: why should I care?
	    <a href="pubs/o4.pdf"><img width="16" height="16" alt="pdf" src="pdf.png" /></a>
	    <a href="pubs/o4.bib"><img width="26" height="16" alt="BiBTeX" src="bibtex.png" /></a><br />
	    SDU-UP, March 2024.
	  </p>
	  <div class="abstract">
	    <b>Abstract.</b> Blog post.</div>
	</div>

	<div class="pub" id="o3"><p>
	    <span class="numero">[3]</span>AI: Sådan laver forskere computere, der kan tænke
	    <a href="pubs/o3.pdf"><img width="16" height="16" alt="pdf" src="pdf.png" /></a>
	    <a href="pubs/o3.bib"><img width="26" height="16" alt="BiBTeX" src="bibtex.png" /></a><br />
	    <a href="https://videnskab.dk/teknologi/ai-saadan-laver-forskere-computere-der-kan-taenke/">Videnskab.dk</a>, March 2020.
	  </p>
	  <div class="abstract">
	    <b>Abstract.</b> Deep learning kan ikke lave fordomsfri algoritmer. Derfor er forskere i gang med at udvikle nye metoder, som kan lære computerne at tænke over beslutningerne.</div>
	</div>

	<div class="pub" id="o2"><p>
	    <span class="numero">[2]</span>Uma Forma Diferente de Fazer Contas
	    <a href="pubs/o2.pdf"><img width="16" height="16" alt="pdf" src="pdf.png" /></a>
	    <a href="pubs/o2.bib"><img width="26" height="16" alt="BiBTeX" src="bibtex.png" /></a><br />
	    in J.P.&nbsp;Boavida, R.&nbsp;Carpentier, L.&nbsp;Cruz-Filipe, P.&nbsp;Gonçalves, E.&nbsp;Grifo, D.&nbsp;Henriques and A.R.&nbsp;Pires (eds.),
	    <em>Números, cirurgias e nós de gravata: 10 anos de Seminário Diagonal no IST</em>, Lisbon, 2012.
	  </p>
	  <div class="abstract">
	    <b>Abstract.</b> Para muitos matemáticos, a Matemática é fundamentalmente um jogo.  Neste artigo, apresentamos exactamente isso &ndash; apenas um jogo, com regras extremamente simples, que se descobre afinal ser um modelo teórico do funcionamento de um computador tão válido como qualquer outro.
	  </div>
	</div>

	<div class="pub" id="o1"><p>
	    <span class="numero">[1]</span>Habilidades com Somatórios
	    <a href="pubs/o1.pdf"><img width="16" height="16" alt="pdf" src="pdf.png" /></a>
	    <a href="pubs/o1.bib"><img width="26" height="16" alt="BiBTeX" src="bibtex.png" /></a><br />
	    in J.P.&nbsp;Boavida, A.&nbsp;Cannas da Silva, L.&nbsp;Cruz-Filipe, J.&nbsp;Fachada and P.&nbsp;Resende (eds.),
	    <em>Semin&aacute;rio Diagonal&ndash;Proceedings IST 2000-01</em>, Lisbon, 2001.
	  </p>
	  <div class="abstract">
	    <b>Abstract.</b> Alguns quebra-cabeças relativamente simples criam por vezes a necessidade de calcular somas pouco atraentes. Neste apontamento introduzem-se técnicas elegantes que permitem resolver alguns somatórios sem esforço recorrendo, nomeadamente, &agrave; introdução de uma notação diferente da habitual.
	  </div>
	</div>

	<h4>Unpublished notes</h4>

	<div class="pub" id="n09"><p>
	    <span class="numero">[9]</span>Active Integrity Constraints and Operational Aspects of the Problem of Database Repair (with P.&nbsp;Engrácia, <a href="http://www.di.fc.ul.pt/~gg/">G.&nbsp;Gaspar</a>, <a href="http://www.di.fc.ul.pt/~in/">I.&nbsp;Nunes</a> and <a href="http://imada.sdu.dk/~petersk/">P.&nbsp;Schneider-Kamp</a>), 2018.
	    <a href="pubs/n09.pdf"><img width="16" height="16" alt="pdf" src="pdf.png" /></a>
	    <a href="pubs/n09.bib"><img width="26" height="16" alt="BiBTeX" src="bibtex.png" /></a></p>
	  <div class="abstract">
	    <b>Abstract.</b> Repairing an inconsistent database is a well-known problem for which several partial approaches have been proposed and implemented in the past. One of the existing proposals uses active integrity constraints (AICs), which are consistency requirements that also allow one to restrict the possible ways to repair inconsistencies. The typical semantics for AICs is declarative, and thus suggests no algorithms to compute repairs.<br />
	    In this article, we show how AICs may be used directly to repair inconsistent databases in an efficient way. First, we introduce notions of independence and precedence on AICs that allow the search for repairs to be, respectively, parallelized and sequentialized. Afterwards, we present an operational semantics and show that the different kinds of repairs for AICs can be effectively computed as leaves of specific kinds of trees. We show that this operational semantics is complete when existence of a repair is an NP-complete problem. Finally we discuss the applicability of these techniques and results to integrity constraints in general.</div>
	</div>

	<div class="pub" id="n08"><p>
	    <span class="numero">[8]</span>On Asynchrony and Choreographies (with <a href="http://www.fabriziomontesi.com/">F.&nbsp;Montesi</a>), 2018.
	    <a href="pubs/n08.pdf"><img width="16" height="16" alt="pdf" src="pdf.png" /></a>
	    <a href="pubs/n08.bib"><img width="26" height="16" alt="BiBTeX" src="bibtex.png" /></a></p>
	  <div class="abstract">
	    <b>Abstract.</b> Choreographic Programming is a paradigm for the development of concurrent software, where deadlocks are prevented syntactically and then correct-by-construction implementations in process models are mechanically generated. The formal semantics of choreography languages are typically based on synchronous communications, in order to achieve a simpler theory. However, many real-world systems have asynchronous communications. Previous attempts at enriching choreographies with asynchrony rely on <i>ad-hoc</i> constructions, whose adequacy is only argued informally.<br />
	    In this work, we present a systematic study of asynchronous communications in choreographies. First, we discuss and formalise the properties that an asynchronous semantics for choreographies should have. Then, we explore how out-of-order execution, previously used in choreographies for modelling concurrency, can be used to endow choreographies with an asynchronous semantics that satisfies our properties. Our development yields a pleasant correspondence with FIFO-based asynchronous messaging, modelled in a process calculus. Finally, we investigate the expressivity of choreography languages with respect to asynchrony. Specifically, we find out that choreography languages equipped with process spawning and name mobility primitives are expressive enough to program asynchronous behaviour over a simple synchronous semantics.</div>
	</div>

	<div class="pub" id="n07"><p>
	    <span class="numero">[7]</span>Procedural Choreographic Programming (with <a href="http://www.fabriziomontesi.com/">F.&nbsp;Montesi</a>), 2017.
	    <a href="pubs/n07.pdf"><img width="16" height="16" alt="pdf" src="pdf.png" /></a>
	    <a href="pubs/n07.bib"><img width="26" height="16" alt="BiBTeX" src="bibtex.png" /></a></p>
	  <div class="abstract">
	    <b>Abstract.</b> Choreographic Programming is an emerging paradigm for correct-by-construction concurrent programming based on message passing. Models based on choreographic programming have been successfully developed for different settings where concurrent programming is challenging, including service-oriented computing and cyber-physical systems. However, the general applicability of the paradigm is limited by the current lack of support for reusable procedures, which hinders modularity.<br />
	    We propose Procedural Choreographies (PC), a choreographic language model with full procedural abstraction. PC includes unbounded process creation and name mobility, yielding a powerful framework for writing correct concurrent algorithms that can be compiled into a process calculus. This expressivity requires a typing discipline to ensure that processes are properly connected when enacting procedures. Connections may form networks of arbitrary graph structures. We develop a formal synthesis procedure that, given a program in PC, generates a correct-by-construction concurrent implementation in terms of a process calculus. We illustrate the expressivity of PC with a series of examples, including parallel streams and parallel computation based on pipelining.</div>
	</div>

	<div class="pub" id="n06"><p>
	    <span class="numero">[6]</span>Connectors meet Choreographies (with <a href="http://homepages.cwi.nl/~farhad/">F.&nbsp;Arbab</a>, <a href="http://www.open.ou.nl/ssj/">S.&nbsp;Jongmans</a> and <a href="http://www.fabriziomontesi.com/">F.&nbsp;Montesi</a>), 2016.
	    <a href="pubs/n06.pdf"><img width="16" height="16" alt="pdf" src="pdf.png" /></a>
	    <a href="pubs/n06.bib"><img width="26" height="16" alt="BiBTeX" src="bibtex.png" /></a></p>
	  <div class="abstract">
	    <b>Abstract.</b> Choreographic Programming is a paradigm for developing concurrent programs that are deadlock-free by construction, by syntactically disallowing mismatched I/O and then synthesising process implementations automatically. Most choreography models assume that all communication occurs synchronously between two parties. This has been relaxed in some settings, allowing for example asynchronous communications, many-to-one, or one-to-many. However, these extensions are hardcoded in the syntax and semantics of each particular model.<br />
	    In this work, we present Cho-Reo-graphies (CR), a model where choreographies are parametric in the (Reo) connectors through which parties communicate. CR is the first choreography model where different communication semantics (e.g., synchronous and asynchronous) can freely be mixed in the same choreography. We prove that if a choreography respects the rules of the connectors that it uses, then the process implementation that we can synthesise from it enjoys deadlock freedom.</div>
        </div>

	<div class="pub" id="n05"><p>
	    <span class="numero">[5]</span>When Six Gates are Not Enough (with <a href="http://www.cs.bgu.ac.il/~mcodish/">M.&nbsp;Codish</a>, M.&nbsp;Frank and <a href="http://imada.sdu.dk/~petersk/">P.&nbsp;Schneider-Kamp</a>), 2015.
	    <a href="pubs/n05.pdf"><img width="16" height="16" alt="pdf" src="pdf.png" /></a>
	    <a href="pubs/n05.bib"><img width="26" height="16" alt="BiBTeX" src="bibtex.png" /></a></p>
	  <div class="abstract">
	    <b>Abstract.</b> We study the topology of Boolean circuits and apply the pigeonhole principle to show that there must exist Boolean functions on 7 inputs with a multiplicative complexity of at least 7, i.e., that cannot be computed with only 6 multiplications in the Galois field with two elements.  Focusing on topology also enables to improve other lower bounds on multiplicative complexity.</div>
        </div>

	<div class="pub" id="n04"><p>
	    <span class="numero">[4]</span>Cut-elimination theorem for second-order logic (with <a href="http://www.ciul.ul.pt/~ferferr/">F.&nbsp;Ferreira</a>), August 2013
	    <a href="pubs/n04.pdf"><img width="16" height="16" alt="pdf" src="pdf.png" /></a>
	    <a href="pubs/n04.bib"><img width="26" height="16" alt="BiBTeX" src="bibtex.png" /></a></p>
	  <div class="abstract">
	    <b>Abstract.</b> This note contains the full proof of the cut-elimination theorem in [13] above.
	  </div>
	</div>

	<div class="pub" id="n03"><p>
	    <span class="numero">[3]</span>The Automotive Case Study in the Sensoria Core Calculi (with <a href="http://http://www.di.fc.ul.pt/~fmartins">F.&nbsp;Martins</a> and <a href="http://http://www.di.fc.ul.pt/~vv">V.&nbsp;Vasconcelos</a>), June 2017
	    <a href="pubs/n03.pdf"><img width="16" height="16" alt="pdf" src="pdf.png" /></a>
	    <a href="pubs/n03.bib"><img width="26" height="16" alt="BiBTeX" src="bibtex.png" /></a></p>
	  <div class="abstract">
	    <b>Abstract.</b> This report studies different definitions of bisimulation within the Stream-Based Service-Centered Calculus (SSCC) and shows that both strong and weak ground bisimulation are non-input congruences.
	  </div>
	</div>

	<div class="pub" id="n02"><p>
	    <span class="numero">[2]</span>Sequent Calculi Based on Derivations (with <a href="http://sqig.math.ist.utl.pt/css/">C.&nbsp;Sernadas</a>), 2005
	    <a href="pubs/n02.pdf"><img width="16" height="16" alt="pdf" src="pdf.png" /></a>
	    <a href="pubs/n02.bib"><img width="26" height="16" alt="BiBTeX" src="bibtex.png" /></a></p>
	  <div class="abstract">
	    <b>Abstract.</b> Fibring is a meta-logical constructor that combines two given logics and produces a new one. In particular, the fibring of two sequent calculi is obtained by combining the languages of both calculi and taking all rules allowed in either calculus. By their own nature, proofs in the fibring have no relationship to proofs in the components, so that these are essentially different objects. In this paper, we propose a novel definition of fibring of two sequent calculi that takes the notion of derivation as primitive. Using this construction, we show that a proof in the fibring is essentially a finite set of proofs in the components structured in a meaningful way. We also use this novel definition to show that fibring preserves cut elimination and decidability.
	  </div>
	</div>

	<div class="pub" id="n01"><p>
	    <span class="numero">[1]</span>A Decision Procedure for Equational Reasoning in Commutative Algebraic Structures (with <a href="http://www.cs.ru.nl/~freek/">F.&nbsp;Wiedijk</a>), October 2004
	    <a href="pubs/n01.pdf"><img width="16" height="16" alt="pdf" src="pdf.png" /></a>
	    <a href="pubs/n01.bib"><img width="26" height="16" alt="BiBTeX" src="bibtex.png" /></a></p>
	  <div class="abstract">
	    <b>Abstract.</b> We present a decision procedure for equational reasoning in abelian groups, commutative rings and fields that checks whether a given equality can be proven from the axioms of these structures. This has been implemented as a tactic in Coq; here we give a mathematical description of the decision procedure that abstracts from Coq specifics, making the work in principle adaptable to other theorem provers.<br />
	    Within Coq we prove that this decision procedure is correct. On the meta-level we analyse its completeness, showing that it is complete for groups and rings in the sense that the tactic succeeds in finding a proof of an equality if and only if that equality is provable from the group/ring axioms without any hypotheses. Finally we characterize in what way our method is incomplete for fields.
	  </div>
	</div>
      </div>
    </div>

    <?php make_footer("RESEARCH","ENGLISH"); ?>
  </body>
</html>
