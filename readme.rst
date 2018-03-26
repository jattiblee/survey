<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
<HEAD>
	<META HTTP-EQUIV="CONTENT-TYPE" CONTENT="text/html; charset=utf-8">
	<TITLE>IEEE Software Requirements Specification Template</TITLE>
	<META NAME="GENERATOR" CONTENT="LibreOffice 4.1.6.2 (Linux)">
	<META NAME="AUTHOR" CONTENT="Defri Kurniawan">
	<META NAME="CREATED" CONTENT="20180321;100100000000000">
	<META NAME="CHANGEDBY" CONTENT="PURNAIUDA">
	<META NAME="CHANGED" CONTENT="20180323;135500000000000">
	<META NAME="AppVersion" CONTENT="16.0000">
	<META NAME="DocSecurity" CONTENT="0">
	<META NAME="HyperlinksChanged" CONTENT="false">
	<META NAME="LinksUpToDate" CONTENT="false">
	<META NAME="ScaleCrop" CONTENT="false">
	<META NAME="ShareDoc" CONTENT="false">
	<STYLE TYPE="text/css">
	<!--
		@page { size: 8.5in 11in; margin: 1in }
		P { margin-top: 0.08in; margin-bottom: 0.08in; direction: ltr; line-height: 100%; widows: 2; orphans: 2 }
		P.western { font-family: "Times New Roman", serif; font-size: 12pt; so-language: en-GB }
		P.cjk { font-size: 12pt }
		H1 { margin-top: 0.33in; margin-bottom: 0.17in; direction: ltr; line-height: 0.17in; page-break-inside: avoid; widows: 2; orphans: 2 }
		H1.western { font-family: "Times", serif; font-size: 18pt }
		H1.cjk { font-size: 18pt }
		H1.ctl { font-size: 10pt; font-weight: normal }
		H2 { margin-top: 0.19in; margin-bottom: 0.19in; direction: ltr; line-height: 0.17in; page-break-inside: avoid; widows: 2; orphans: 2 }
		H2.western { font-family: "Times", serif; font-size: 14pt }
		H2.cjk { font-family: "Times New Roman"; font-size: 14pt }
		H2.ctl { font-family: "Times New Roman"; font-size: 10pt; font-weight: normal }
	-->
	</STYLE>
</HEAD>
<BODY LANG="en-US" DIR="LTR">
<P ALIGN=CENTER STYLE="margin-top: 0.17in; margin-bottom: 0.5in"><FONT FACE="Arial, serif"><FONT SIZE=7 STYLE="font-size: 32pt"><B><I>Software
Requirements Specification</I></B></FONT></FONT></P>
<P ALIGN=CENTER STYLE="margin-top: 0in; margin-bottom: 0.28in"><FONT FACE="Arial, serif"><FONT SIZE=7 STYLE="font-size: 32pt"><B><FONT SIZE=5 STYLE="font-size: 20pt">for</FONT></B></FONT></FONT></P>
<P ALIGN=CENTER STYLE="margin-top: 0.17in; margin-bottom: 0.5in"><FONT FACE="Arial, serif"><FONT SIZE=4><B><FONT SIZE=5 STYLE="font-size: 20pt"><SPAN LANG="id-ID">Aplikasi
Form Online</SPAN></FONT></B></FONT></FONT></P>
<P LANG="id-ID" ALIGN=RIGHT STYLE="margin-top: 0.17in; margin-bottom: 0.5in">
<BR><BR>
</P>
<P ALIGN=CENTER STYLE="margin-top: 0.17in; margin-bottom: 0in"><FONT FACE="Arial, serif"><FONT SIZE=4><B><SPAN LANG="id-ID">Oleh:</SPAN></B></FONT></FONT></P>
<P ALIGN=CENTER STYLE="margin-top: 0.17in; margin-bottom: 0in"><FONT FACE="Arial, serif"><FONT SIZE=4><B><SPAN LANG="id-ID">171022000045
– Jati Prasetyo (Github : jattiblee)</SPAN></B></FONT></FONT></P>
<P ALIGN=CENTER STYLE="margin-top: 0in; margin-bottom: 0in"><FONT FACE="Arial, serif"><FONT SIZE=4><B><SPAN LANG="id-ID">171022000062
– Juri Pebrianto (Github : aquarink)</SPAN></B></FONT></FONT></P>
<P ALIGN=CENTER STYLE="margin-top: 0in; margin-bottom: 0in"><FONT FACE="Arial, serif"><FONT SIZE=4><B><SPAN LANG="id-ID">171022000044
– Riky Susanto (Github : riky-cloud)</SPAN></B></FONT></FONT></P>
<P LANG="id-ID" ALIGN=RIGHT STYLE="margin-top: 0.17in; margin-bottom: 0in">
<BR>
</P>
<P LANG="id-ID" ALIGN=RIGHT STYLE="margin-top: 0in; margin-bottom: 0in">
<BR>
</P>
<P STYLE="margin-bottom: 0.17in; line-height: 0.17in; page-break-inside: avoid; page-break-before: always; page-break-after: avoid"><A NAME="_Toc346509227"></A><A NAME="_Toc346508952"></A><A NAME="_Toc346508722"></A><A NAME="_Toc344879822"></A><A NAME="_Toc344877432"></A>
<FONT FACE="Times, serif"><FONT SIZE=5><B>Table of Contents</B></FONT></FONT></P>
<DIV ID="Table of Contents1" DIR="LTR">
	<P ALIGN=JUSTIFY STYLE="margin-left: 0.25in; text-indent: -0.25in; margin-top: 0.04in; margin-bottom: 0in; line-height: 0.15in">
	<BR>
	</P>
</DIV>
<P LANG="id-ID" CLASS="western" STYLE="margin-top: 0in; margin-bottom: 0in; line-height: 0.17in">
<BR>
</P>
<P STYLE="margin-bottom: 0.17in; line-height: 0.17in; page-break-inside: avoid; page-break-after: avoid">
<FONT FACE="Times, serif"><FONT SIZE=5><B>Revision History</B></FONT></FONT></P>
<TABLE WIDTH=658 CELLPADDING=7 CELLSPACING=2>
	<COL WIDTH=126>
	<COL WIDTH=62>
	<COL WIDTH=314>
	<COL WIDTH=86>
	<TR VALIGN=TOP>
		<TD WIDTH=126 STYLE="border-top: 1.50pt solid #00000a; border-bottom: 4.50pt double #00000a; border-left: 1.50pt solid #00000a; border-right: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P CLASS="western" STYLE="margin-top: 0.03in"><FONT FACE="Times, serif"><B>Name</B></FONT></P>
		</TD>
		<TD WIDTH=62 STYLE="border-top: 1.50pt solid #00000a; border-bottom: 4.50pt double #00000a; border-left: 1px solid #00000a; border-right: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P CLASS="western" STYLE="margin-top: 0.03in"><FONT FACE="Times, serif"><B>Date</B></FONT></P>
		</TD>
		<TD WIDTH=314 STYLE="border-top: 1.50pt solid #00000a; border-bottom: 4.50pt double #00000a; border-left: 1px solid #00000a; border-right: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P CLASS="western" STYLE="margin-top: 0.03in"><FONT FACE="Times, serif"><B>Reason
			For Changes</B></FONT></P>
		</TD>
		<TD WIDTH=86 STYLE="border-top: 1.50pt solid #00000a; border-bottom: 4.50pt double #00000a; border-left: 1px solid #00000a; border-right: 1.50pt solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P CLASS="western" STYLE="margin-top: 0.03in"><FONT FACE="Times, serif"><B>Version</B></FONT></P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=126 STYLE="border-top: none; border-bottom: 1px solid #00000a; border-left: 1.50pt solid #00000a; border-right: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P CLASS="western" STYLE="margin-top: 0.03in"><BR>
			</P>
		</TD>
		<TD WIDTH=62 STYLE="border-top: none; border-bottom: 1px solid #00000a; border-left: 1px solid #00000a; border-right: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P CLASS="western" STYLE="margin-top: 0.03in"><BR>
			</P>
		</TD>
		<TD WIDTH=314 STYLE="border-top: none; border-bottom: 1px solid #00000a; border-left: 1px solid #00000a; border-right: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P CLASS="western" STYLE="margin-top: 0.03in"><BR>
			</P>
		</TD>
		<TD WIDTH=86 STYLE="border-top: none; border-bottom: 1px solid #00000a; border-left: 1px solid #00000a; border-right: 1.50pt solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P CLASS="western" STYLE="margin-top: 0.03in"><BR>
			</P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=126 STYLE="border-top: 1px solid #00000a; border-bottom: 1px solid #00000a; border-left: 1.50pt solid #00000a; border-right: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P CLASS="western" STYLE="margin-top: 0.03in"><BR>
			</P>
		</TD>
		<TD WIDTH=62 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P CLASS="western" STYLE="margin-top: 0.03in"><BR>
			</P>
		</TD>
		<TD WIDTH=314 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P CLASS="western" STYLE="margin-top: 0.03in"><BR>
			</P>
		</TD>
		<TD WIDTH=86 STYLE="border-top: 1px solid #00000a; border-bottom: 1px solid #00000a; border-left: 1px solid #00000a; border-right: 1.50pt solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P CLASS="western" STYLE="margin-top: 0.03in"><BR>
			</P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=126 STYLE="border-top: 1px solid #00000a; border-bottom: 1.50pt solid #00000a; border-left: 1.50pt solid #00000a; border-right: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P CLASS="western" STYLE="margin-top: 0.03in"><BR>
			</P>
		</TD>
		<TD WIDTH=62 STYLE="border-top: 1px solid #00000a; border-bottom: 1.50pt solid #00000a; border-left: 1px solid #00000a; border-right: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P CLASS="western" STYLE="margin-top: 0.03in"><BR>
			</P>
		</TD>
		<TD WIDTH=314 STYLE="border-top: 1px solid #00000a; border-bottom: 1.50pt solid #00000a; border-left: 1px solid #00000a; border-right: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P CLASS="western" STYLE="margin-top: 0.03in"><BR>
			</P>
		</TD>
		<TD WIDTH=86 STYLE="border-top: 1px solid #00000a; border-bottom: 1.50pt solid #00000a; border-left: 1px solid #00000a; border-right: 1.50pt solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P CLASS="western" STYLE="margin-top: 0.03in"><BR>
			</P>
		</TD>
	</TR>
</TABLE>
<P CLASS="western" STYLE="margin-top: 0in; margin-bottom: 0in; line-height: 0.17in">
<BR>
</P>
<P CLASS="western" STYLE="margin-top: 0in; margin-bottom: 0in; line-height: 0.17in">
<BR>
</P>
<OL>
	<LI><H1 CLASS="western" STYLE="page-break-before: always"><A NAME="_Toc485163096"></A>
	<SPAN LANG="id-ID">Pendahuluan</SPAN></H1>
	<OL>
		<LI><H2 CLASS="western"><A NAME="_Toc485163097"></A><SPAN LANG="id-ID">Tujuan
		Penulisan Dokumen</SPAN></H2>
	</OL>
</OL>
<P ALIGN=JUSTIFY STYLE="text-indent: 0.39in; margin-top: 0in; margin-bottom: 0in; line-height: 0.17in">
<FONT FACE="Arial, serif"><FONT SIZE=2 STYLE="font-size: 11pt"><FONT FACE="Times New Roman, serif"><FONT SIZE=3><SPAN LANG="id-ID"><SPAN STYLE="font-style: normal">Tujuan
dari dokumen Software Requirement Specification ini adalah untuk
memberikan gambaran yang spesifik mengenai kebutuhan software dari
Aplikasi Form Online. Spesifikasi tersebut termasuk dari segi
perangkat lunak dan perangkat keras, untuk memberikan gambaran dan
penjelasan yang dibutuhkan untuk produk termasuk kebutuhan fungsional
dan non fungsional, dan kebutuhan antar muka, mulai dari antar muka
pengguna hingga antar muka komunikasi.</SPAN></SPAN></FONT></FONT></FONT></FONT></P>
<OL>
	<OL START=2>
		<LI><H2 CLASS="western"><A NAME="_Toc485163098"></A><A NAME="_Toc439994669"></A>
		<SPAN LANG="id-ID">Audien yang Dituju dan Pembaca yang Disarankan</SPAN></H2>
	</OL>
</OL>
<P STYLE="margin-top: 0in; margin-bottom: 0in; line-height: 0.17in"><FONT FACE="Arial, serif"><FONT SIZE=2 STYLE="font-size: 11pt"><I>&lt;<SPAN LANG="id-ID">J</SPAN>elaskan
berbagai jenis pembaca bahwa dokumen ini ditujukan untuk, seperti
pengembang, manajer proyek, staf pemasaran, pengguna, penguji, dan
<SPAN LANG="id-ID">lainnya</SPAN>&gt;</I></FONT></FONT></P>
<P LANG="id-ID" STYLE="margin-top: 0in; margin-bottom: 0in; line-height: 0.17in">
<BR>
</P>
<OL>
	<OL START=3>
		<LI><H2 CLASS="western"><A NAME="_Toc485163099"></A><A NAME="_Toc439994670"></A>
		<SPAN LANG="id-ID">Batasan Produk</SPAN></H2>
	</OL>
</OL>
<P ALIGN=JUSTIFY STYLE="text-indent: 0.39in; margin-top: 0in; margin-bottom: 0in; line-height: 0.17in">
<FONT FACE="Arial, serif"><FONT SIZE=2 STYLE="font-size: 11pt"><FONT FACE="Times New Roman, serif"><FONT SIZE=3><SPAN LANG="id-ID"><SPAN STYLE="font-style: normal">Semua
hal yang tercantum di dalam dokumen ini merupakan bagian dari ruang
lingkup kebutuhan pembangunan perngkat lunak yang berupa aplikasi
berbasis web yang digunakan untuk membuat form secara online,
menjawab pertanyaan yang telah dibuat oleh user lain, dan melihat
hasil jawaban yang telah dijawab oleh user lain.</SPAN></SPAN></FONT></FONT></FONT></FONT></P>
<OL>
	<OL START=4>
		<LI><H2 CLASS="western"><A NAME="_Toc485163100"></A><A NAME="_Toc136057437"></A><A NAME="_Toc530143614"></A><A NAME="_Toc525536494"></A><A NAME="_Toc505219817"></A>
		Definisi dan Istilah</H2>
	</OL>
</OL>
<P LANG="en-GB" STYLE="margin-top: 0in; margin-bottom: 0in"><FONT SIZE=2><FONT FACE="Arial, serif"><FONT SIZE=2 STYLE="font-size: 11pt"><SPAN LANG="id-ID"><SPAN STYLE="font-style: normal">&lt;tulis
istilah dan definisikan jika ada&gt;</SPAN></SPAN></FONT></FONT></FONT></P>
<P LANG="id-ID" STYLE="margin-top: 0in; margin-bottom: 0in; font-style: normal">
<BR>
</P>
<UL>
	<LI><P LANG="en-GB" CLASS="western" STYLE="margin-top: 0in; margin-bottom: 0in">
	<FONT FACE="Arial, serif"><FONT SIZE=2 STYLE="font-size: 11pt">SRS	:	</FONT></FONT><FONT FACE="Arial, serif"><FONT SIZE=2 STYLE="font-size: 11pt"><I>Software
	Requirements Specification</I></FONT></FONT><FONT FACE="Arial, serif"><FONT SIZE=2 STYLE="font-size: 11pt">,
	atau</FONT></FONT><FONT FACE="Arial, serif"><FONT SIZE=2 STYLE="font-size: 11pt"><SPAN LANG="id-ID">
	</SPAN></FONT></FONT>
	</P>
</UL>
<P LANG="en-GB" CLASS="western" STYLE="margin-left: 0.5in; margin-top: 0in; margin-bottom: 0in">
<FONT FACE="Arial, serif"><FONT SIZE=2 STYLE="font-size: 11pt"><SPAN LANG="id-ID">	
  Spesifikasi Kebutuhan Perangkat Lunak (SKPL)</SPAN></FONT></FONT></P>
<P LANG="en-GB" CLASS="western" STYLE="text-indent: 0.5in; margin-top: 0in; margin-bottom: 0in">
<BR>
</P>
<UL>
	<LI><P LANG="en-GB" CLASS="western" STYLE="margin-top: 0in; margin-bottom: 0in">
	<FONT FACE="Arial, serif"><FONT SIZE=2 STYLE="font-size: 11pt">IEEE	:	</FONT></FONT><FONT FACE="Arial, serif"><FONT SIZE=2 STYLE="font-size: 11pt"><I>Institute
	of Electrical and Electronics Engineering</I></FONT></FONT></P>
</UL>
<P LANG="en-GB" CLASS="western" STYLE="text-indent: 0.5in; margin-top: 0in; margin-bottom: 0in">
<FONT FACE="Arial, serif"><FONT SIZE=2 STYLE="font-size: 11pt">		</FONT></FONT><FONT FACE="Arial, serif"><FONT SIZE=2 STYLE="font-size: 11pt"><SPAN LANG="sv-SE">Standar
internasional untuk pengembangan dan perancangan produk.</SPAN></FONT></FONT></P>
<P LANG="id-ID" CLASS="western" STYLE="text-indent: 0.5in; margin-top: 0in; margin-bottom: 0in">
<BR>
</P>
<OL>
	<OL START=5>
		<LI><H2 CLASS="western"><A NAME="_Toc485163101"></A><A NAME="_Toc439994672"></A>
		Ref<SPAN LANG="id-ID">rensi</SPAN></H2>
	</OL>
</OL>
<P CLASS="western" STYLE="text-indent: 0.39in; margin-top: 0in; margin-bottom: 0in; line-height: 100%">
<FONT FACE="Times, serif">IEEE Std. 830-1998, IEEE Recommended
Practice for Software Requirement Specifications.</FONT></P>
<P LANG="id-ID" CLASS="western" STYLE="margin-top: 0in; margin-bottom: 0in; line-height: 100%">
<BR>
</P>
<P LANG="id-ID" CLASS="western" STYLE="margin-top: 0in; margin-bottom: 0in; line-height: 100%">
<BR>
</P>
<P LANG="id-ID" CLASS="western" STYLE="margin-top: 0in; margin-bottom: 0in; line-height: 100%">
<BR>
</P>
<P LANG="id-ID" CLASS="western" STYLE="margin-top: 0in; margin-bottom: 0in; line-height: 100%">
<BR>
</P>
<OL START=2>
	<LI><H1 CLASS="western" STYLE="page-break-before: always"><A NAME="_Toc485163102"></A><A NAME="_Toc439994673"></A>
	<SPAN LANG="id-ID">Deskripsi Keseluruhan</SPAN></H1>
	<OL>
		<LI><H2 CLASS="western"><A NAME="_Toc439994674"></A><A NAME="_Toc485163103"></A>
		<SPAN LANG="id-ID">Deskripsi Produk </SPAN>
		</H2>
	</OL>
</OL>
<P ALIGN=JUSTIFY STYLE="text-indent: 0.39in; margin-top: 0in; margin-bottom: 0in; line-height: 0.17in">
<FONT FACE="Arial, serif"><FONT SIZE=2 STYLE="font-size: 11pt"><FONT FACE="Times New Roman, serif"><FONT SIZE=3><SPAN LANG="id-ID"><SPAN STYLE="font-style: normal">Aplikasi
Form Online ini merupakan perankat lunak yang dapat digunakan untuk
membuat pertanyaan – pertanyaan agar dapat dijawab atau direspon
oleh user lain secara online. Pada aplikasi ini, user yang telah
membuat pertanyaan juga dapat membagikan </SPAN></SPAN></FONT></FONT><I><FONT FACE="Times New Roman, serif"><FONT SIZE=3><SPAN LANG="id-ID">link
</SPAN></FONT></FONT></I><FONT FACE="Times New Roman, serif"><FONT SIZE=3><SPAN LANG="id-ID"><SPAN STYLE="font-style: normal">kepada
user lain agar user lain dapat menjawab pertanyaan yang telah dibuat.
Setelah user lain menjawab pertanyaan tersebut, user pemberi
pertanyaan dapat melihat jawaban yang diinput oleh user lain.
Aplikasi ini dapat digunakan untuk membuat Survey Online, Kuis
Online, dan bisa digunakan untuk Ujian Online.</SPAN></SPAN></FONT></FONT></FONT></FONT></P>
<OL>
	<OL START=2>
		<LI><H2 CLASS="western"><A NAME="_Toc439994675"></A><A NAME="_Toc485163104"></A>
		<SPAN LANG="id-ID">Fungsi Produk </SPAN>
		</H2>
	</OL>
</OL>
<P STYLE="text-indent: 0.39in; margin-top: 0in; margin-bottom: 0in; line-height: 0.17in">
<FONT FACE="Arial, serif"><FONT SIZE=2 STYLE="font-size: 11pt"><FONT FACE="Times New Roman, serif"><FONT SIZE=3><SPAN LANG="id-ID"><SPAN STYLE="font-style: normal">Produk
ini memiliki beberapa fungsi dalam kebutuhan User antara lain:</SPAN></SPAN></FONT></FONT></FONT></FONT></P>
<UL>
	<LI><P STYLE="margin-top: 0in; margin-bottom: 0in; line-height: 0.17in">
	<FONT FACE="Arial, serif"><FONT SIZE=2 STYLE="font-size: 11pt"><FONT FACE="Times New Roman, serif"><FONT SIZE=3><SPAN LANG="id-ID"><SPAN STYLE="font-style: normal">Login
	User</SPAN></SPAN></FONT></FONT></FONT></FONT></P>
	<LI><P STYLE="margin-top: 0in; margin-bottom: 0in; line-height: 0.17in">
	<FONT FACE="Arial, serif"><FONT SIZE=2 STYLE="font-size: 11pt"><FONT FACE="Times New Roman, serif"><FONT SIZE=3><SPAN LANG="id-ID"><SPAN STYLE="font-style: normal">Register
	User</SPAN></SPAN></FONT></FONT></FONT></FONT></P>
	<LI><P STYLE="margin-top: 0in; margin-bottom: 0in; line-height: 0.17in">
	<FONT FACE="Arial, serif"><FONT SIZE=2 STYLE="font-size: 11pt"><FONT FACE="Times New Roman, serif"><FONT SIZE=3><SPAN LANG="id-ID"><SPAN STYLE="font-style: normal">Buat
	pertanyaan</SPAN></SPAN></FONT></FONT></FONT></FONT></P>
	<LI><P STYLE="margin-top: 0in; margin-bottom: 0in; line-height: 0.17in">
	<FONT FACE="Arial, serif"><FONT SIZE=2 STYLE="font-size: 11pt"><FONT FACE="Times New Roman, serif"><FONT SIZE=3><SPAN LANG="id-ID"><SPAN STYLE="font-style: normal">Preview
	pertanyaan</SPAN></SPAN></FONT></FONT></FONT></FONT></P>
	<LI><P STYLE="margin-top: 0in; margin-bottom: 0in; line-height: 0.17in">
	<FONT FACE="Arial, serif"><FONT SIZE=2 STYLE="font-size: 11pt"><FONT FACE="Times New Roman, serif"><FONT SIZE=3><SPAN LANG="id-ID"><SPAN STYLE="font-style: normal">Melihat
	Respon (jawaban)</SPAN></SPAN></FONT></FONT></FONT></FONT></P>
	<LI><P STYLE="margin-top: 0in; margin-bottom: 0in; line-height: 0.17in">
	<FONT FACE="Arial, serif"><FONT SIZE=2 STYLE="font-size: 11pt"><FONT FACE="Times New Roman, serif"><FONT SIZE=3><SPAN LANG="id-ID"><SPAN STYLE="font-style: normal">Membagikan
	</SPAN></SPAN></FONT></FONT><I><FONT FACE="Times New Roman, serif"><FONT SIZE=3><SPAN LANG="id-ID">link
	</SPAN></FONT></FONT></I><FONT FACE="Times New Roman, serif"><FONT SIZE=3><SPAN LANG="id-ID"><SPAN STYLE="font-style: normal">pertanyaan</SPAN></SPAN></FONT></FONT></FONT></FONT></P>
	<LI><P STYLE="margin-top: 0in; margin-bottom: 0in; line-height: 0.17in">
	<FONT FACE="Arial, serif"><FONT SIZE=2 STYLE="font-size: 11pt"><FONT FACE="Times New Roman, serif"><FONT SIZE=3><SPAN LANG="id-ID"><SPAN STYLE="font-style: normal">Menjawab
	pertanyaan</SPAN></SPAN></FONT></FONT></FONT></FONT></P>
</UL>
<OL>
	<OL START=3>
		<LI><H2 CLASS="western"><A NAME="_Toc485163105"></A><A NAME="_Toc439994676"></A>
		<SPAN LANG="id-ID">Penggolongan Karakterik Pengguna</SPAN></H2>
	</OL>
</OL>
<P STYLE="text-indent: 0.39in; margin-top: 0in; margin-bottom: 0in; line-height: 0.17in">
<FONT FACE="Arial, serif"><FONT SIZE=2 STYLE="font-size: 11pt"><FONT FACE="Times New Roman, serif"><FONT SIZE=3><SPAN LANG="id-ID"><SPAN STYLE="font-style: normal">Adapun
pengguna dalam sistem ini adalah sebagai berikut:</SPAN></SPAN></FONT></FONT></FONT></FONT></P>
<UL>
	<LI><P STYLE="margin-top: 0in; margin-bottom: 0in; line-height: 0.17in">
	<FONT FACE="Arial, serif"><FONT SIZE=2 STYLE="font-size: 11pt"><FONT FACE="Times New Roman, serif"><FONT SIZE=3><SPAN LANG="id-ID"><SPAN STYLE="font-style: normal">User
	1 (Pembuat pertanyaan)</SPAN></SPAN></FONT></FONT></FONT></FONT></P>
	<LI><P STYLE="margin-top: 0in; margin-bottom: 0in; line-height: 0.17in">
	<FONT FACE="Arial, serif"><FONT SIZE=2 STYLE="font-size: 11pt"><FONT FACE="Times New Roman, serif"><FONT SIZE=3><SPAN LANG="id-ID"><SPAN STYLE="font-style: normal">User
	2 (Pemberi jawaban)</SPAN></SPAN></FONT></FONT></FONT></FONT></P>
</UL>
<P LANG="id-ID" STYLE="margin-left: 0.89in; margin-top: 0in; margin-bottom: 0in; font-style: normal; line-height: 0.17in">
<BR>
</P>
<P STYLE="text-indent: 0.39in; margin-top: 0in; margin-bottom: 0in; line-height: 0.17in">
<FONT FACE="Arial, serif"><FONT SIZE=2 STYLE="font-size: 11pt"><FONT FACE="Times New Roman, serif"><FONT SIZE=3><SPAN LANG="id-ID"><SPAN STYLE="font-style: normal">Tabel
berikut menggambarkan 	karakteristik umum pengguna yang akan
mempengaruhi fungsionalitas dari produk perangkat lunak.</SPAN></SPAN></FONT></FONT></FONT></FONT></P>
<P ALIGN=CENTER STYLE="line-height: 100%; widows: 0; orphans: 0"><A NAME="_Toc136056239"></A>
<FONT COLOR="#00000a"><FONT SIZE=2><FONT FACE="Arial, serif"><FONT SIZE=2 STYLE="font-size: 11pt">Tabel
</FONT></FONT><FONT FACE="Arial, serif"><FONT SIZE=2 STYLE="font-size: 11pt"><SPAN LANG="id-ID">1</SPAN></FONT></FONT><FONT FACE="Arial, serif"><FONT SIZE=2 STYLE="font-size: 11pt">
Karakteristik Pengguna</FONT></FONT></FONT></FONT></P>
<P LANG="id-ID" ALIGN=CENTER STYLE="line-height: 100%; widows: 0; orphans: 0">
<BR><BR>
</P>
<TABLE WIDTH=658 CELLPADDING=7 CELLSPACING=0>
	<COL WIDTH=221>
	<COL WIDTH=197>
	<COL WIDTH=196>
	<TR VALIGN=TOP>
		<TD WIDTH=221 STYLE="border: 1px solid #000001; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P ALIGN=CENTER STYLE="widows: 0; orphans: 0"><FONT COLOR="#00000a"><FONT SIZE=2><FONT SIZE=3><SPAN LANG="id-ID">Kategori
			Pengguna</SPAN></FONT></FONT></FONT></P>
		</TD>
		<TD WIDTH=197 STYLE="border: 1px solid #000001; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P ALIGN=CENTER STYLE="widows: 0; orphans: 0"><FONT COLOR="#00000a"><FONT SIZE=2><FONT SIZE=3><SPAN LANG="id-ID">Fasilitas</SPAN></FONT></FONT></FONT></P>
		</TD>
		<TD WIDTH=196 STYLE="border: 1px solid #000001; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P ALIGN=CENTER STYLE="widows: 0; orphans: 0"><FONT COLOR="#00000a"><FONT SIZE=2><FONT SIZE=3><SPAN LANG="id-ID">Hak
			akses ke Aplikasi</SPAN></FONT></FONT></FONT></P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=221 STYLE="border: 1px solid #000001; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P LANG="id-ID" ALIGN=CENTER STYLE="font-weight: normal; widows: 0; orphans: 0">
			<BR><BR>
			</P>
			<P LANG="id-ID" ALIGN=CENTER STYLE="font-weight: normal; widows: 0; orphans: 0">
			<BR><BR>
			</P>
			<P ALIGN=CENTER STYLE="widows: 0; orphans: 0"><FONT COLOR="#00000a"><FONT SIZE=2><FONT SIZE=3><SPAN LANG="id-ID"><SPAN STYLE="font-weight: normal">User</SPAN></SPAN></FONT></FONT></FONT></P>
		</TD>
		<TD WIDTH=197 STYLE="border: 1px solid #000001; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<UL>
				<LI><P ALIGN=LEFT STYLE="widows: 0; orphans: 0"><FONT COLOR="#00000a"><FONT SIZE=2><FONT SIZE=3><SPAN LANG="id-ID"><SPAN STYLE="font-weight: normal">Login/logout</SPAN></SPAN></FONT></FONT></FONT></P>
				<LI><P ALIGN=LEFT STYLE="widows: 0; orphans: 0"><FONT COLOR="#00000a"><FONT SIZE=2><FONT SIZE=3><SPAN LANG="id-ID"><SPAN STYLE="font-weight: normal">Register</SPAN></SPAN></FONT></FONT></FONT></P>
				<LI><P ALIGN=LEFT STYLE="widows: 0; orphans: 0"><FONT COLOR="#00000a"><FONT SIZE=2><FONT SIZE=3><SPAN LANG="id-ID"><SPAN STYLE="font-weight: normal">Membuat
				pertanyaan</SPAN></SPAN></FONT></FONT></FONT></P>
				<LI><P ALIGN=LEFT STYLE="widows: 0; orphans: 0"><FONT COLOR="#00000a"><FONT SIZE=2><FONT SIZE=3><SPAN LANG="id-ID"><SPAN STYLE="font-weight: normal">Melihat
				respon</SPAN></SPAN></FONT></FONT></FONT></P>
				<LI><P ALIGN=LEFT STYLE="widows: 0; orphans: 0"><FONT COLOR="#00000a"><FONT SIZE=2><FONT SIZE=3><SPAN LANG="id-ID"><SPAN STYLE="font-weight: normal">Membagikan
				</SPAN></SPAN></FONT><FONT SIZE=3><SPAN LANG="id-ID"><I><SPAN STYLE="font-weight: normal">link
				</SPAN></I></SPAN></FONT><FONT SIZE=3><SPAN LANG="id-ID"><SPAN STYLE="font-weight: normal">pertanyaan</SPAN></SPAN></FONT></FONT></FONT></P>
				<LI><P ALIGN=LEFT STYLE="widows: 0; orphans: 0"><FONT COLOR="#00000a"><FONT SIZE=2><FONT SIZE=3><SPAN LANG="id-ID"><SPAN STYLE="font-weight: normal">Menjawab
				pertanyaan</SPAN></SPAN></FONT></FONT></FONT></P>
			</UL>
		</TD>
		<TD WIDTH=196 STYLE="border: 1px solid #000001; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<UL>
				<LI><P ALIGN=LEFT STYLE="widows: 0; orphans: 0"><FONT COLOR="#00000a"><FONT SIZE=2><FONT SIZE=3><SPAN LANG="id-ID"><SPAN STYLE="font-weight: normal">Hak
				akses ke form login</SPAN></SPAN></FONT></FONT></FONT></P>
				<LI><P ALIGN=LEFT STYLE="widows: 0; orphans: 0"><FONT COLOR="#00000a"><FONT SIZE=2><FONT SIZE=3><SPAN LANG="id-ID"><SPAN STYLE="font-weight: normal">Hak
				akses ke form register</SPAN></SPAN></FONT></FONT></FONT></P>
				<LI><P ALIGN=LEFT STYLE="widows: 0; orphans: 0"><FONT COLOR="#00000a"><FONT SIZE=2><FONT SIZE=3><SPAN LANG="id-ID"><SPAN STYLE="font-weight: normal">Hak
				akses ke menu membuat pertanyaan</SPAN></SPAN></FONT></FONT></FONT></P>
				<LI><P ALIGN=LEFT STYLE="widows: 0; orphans: 0"><FONT COLOR="#00000a"><FONT SIZE=2><FONT SIZE=3><SPAN LANG="id-ID"><SPAN STYLE="font-weight: normal">Hak
				akses melihat respon User 2</SPAN></SPAN></FONT></FONT></FONT></P>
			</UL>
		</TD>
	</TR>
</TABLE>
<P LANG="id-ID" ALIGN=CENTER STYLE="line-height: 100%; widows: 0; orphans: 0">
<BR><BR>
</P>
<P LANG="id-ID" STYLE="margin-top: 0in; margin-bottom: 0in; line-height: 0.17in">
<BR>
</P>
<OL>
	<OL START=4>
		<LI><H2 CLASS="western"><A NAME="_Toc439994677"></A><A NAME="_Toc485163106"></A>
		<SPAN LANG="id-ID">Lingkungan Operasi </SPAN>
		</H2>
	</OL>
</OL>
<P STYLE="margin-top: 0in; margin-bottom: 0in; line-height: 0.17in"><FONT FACE="Arial, serif"><FONT SIZE=2 STYLE="font-size: 11pt"><I>&lt;Jelaskan
lingkungan di mana perangkat lunak akan beroperasi, termasuk
platform<SPAN LANG="id-ID">,</SPAN> perangkat keras, sistem operasi
dan versi, dan komponen perangkat lunak lain atau aplikasi yang<SPAN LANG="id-ID">
</SPAN>berdampingan&gt;</I></FONT></FONT></P>
<P LANG="id-ID" STYLE="margin-top: 0in; margin-bottom: 0in; line-height: 0.17in">
<BR>
</P>
<P STYLE="text-indent: 0.39in; margin-top: 0in; margin-bottom: 0in; line-height: 0.17in">
<FONT FACE="Arial, serif"><FONT SIZE=2 STYLE="font-size: 11pt"><FONT FACE="Times New Roman, serif"><FONT SIZE=3><SPAN LANG="id-ID"><SPAN STYLE="font-style: normal">Aplikasi
form online ini adalah aplikasi yang berjalan secara </SPAN></SPAN></FONT></FONT><I><FONT FACE="Times New Roman, serif"><FONT SIZE=3><SPAN LANG="id-ID">stand
alone. </SPAN></FONT></FONT></I><FONT FACE="Times New Roman, serif"><FONT SIZE=3><SPAN LANG="id-ID"><SPAN STYLE="font-style: normal">Aplikasi
ini tidak ada admin karena setiap user dapat membuat pertanyaan untuk
dibagikan.</SPAN></SPAN></FONT></FONT></FONT></FONT></P>
<OL>
	<OL START=5>
		<LI><H2 CLASS="western"><A NAME="_Toc439994678"></A><A NAME="_Toc485163107"></A>
		<SPAN LANG="id-ID">Batasan Desain dan Implementasi </SPAN>
		</H2>
	</OL>
</OL>
<P STYLE="margin-top: 0in; margin-bottom: 0in; line-height: 0.17in"><FONT FACE="Arial, serif"><FONT SIZE=2 STYLE="font-size: 11pt"><I>&lt;Jelaskan
setiap item atau masalah yang akan membatasi pilihan yang tersedia
untuk para pengembang<SPAN LANG="id-ID"> / developer</SPAN>. Ini
mungkin termasuk: kebijakan perusahaan atau peraturan; keterbatasan
hardware <SPAN LANG="id-ID">(</SPAN>persyaratan memori); teknologi
tertentu, alat, dan database yang akan digunakan; persyaratan bahasa;
protokol komunikasi; pertimbangan keamanan; atau standar pemrograman&gt;</I></FONT></FONT></P>
<P LANG="id-ID" STYLE="margin-top: 0in; margin-bottom: 0in; line-height: 0.17in">
<BR>
</P>
<P STYLE="text-indent: 0.39in; margin-top: 0in; margin-bottom: 0in; line-height: 0.17in">
<FONT FACE="Arial, serif"><FONT SIZE=2 STYLE="font-size: 11pt"><FONT FACE="Times New Roman, serif"><FONT SIZE=3><SPAN LANG="id-ID"><SPAN STYLE="font-style: normal">Batasan
aplikasi Form Online dalam konteks SRS ini adalah sebagai berikut:</SPAN></SPAN></FONT></FONT></FONT></FONT></P>
<OL TYPE=a>
	<LI><P STYLE="margin-top: 0in; margin-bottom: 0in; line-height: 0.17in">
	<FONT FACE="Arial, serif"><FONT SIZE=2 STYLE="font-size: 11pt"><FONT FACE="Times New Roman, serif"><FONT SIZE=3><SPAN LANG="id-ID"><SPAN STYLE="font-style: normal">Aplikasi
	ini akan dibangun menggunakan </SPAN></SPAN></FONT></FONT><FONT FACE="Times New Roman, serif"><FONT SIZE=3><SPAN LANG="id-ID"><SPAN STYLE="font-style: normal"><SPAN STYLE="background: #ffff00">....</SPAN></SPAN></SPAN></FONT></FONT><FONT FACE="Times New Roman, serif"><FONT SIZE=3><SPAN LANG="id-ID"><SPAN STYLE="font-style: normal">
	berbasis </SPAN></SPAN></FONT></FONT><FONT FACE="Times New Roman, serif"><FONT SIZE=3><SPAN LANG="id-ID"><SPAN STYLE="font-style: normal"><SPAN STYLE="background: #ffff00">....</SPAN></SPAN></SPAN></FONT></FONT></FONT></FONT></P>
	<LI><P STYLE="margin-top: 0in; margin-bottom: 0in; line-height: 0.17in">
	<FONT FACE="Arial, serif"><FONT SIZE=2 STYLE="font-size: 11pt"><FONT FACE="Times New Roman, serif"><FONT SIZE=3><SPAN LANG="id-ID"><SPAN STYLE="font-style: normal">Database
	yang digunakan adalah MySQL versi </SPAN></SPAN></FONT></FONT><FONT FACE="Times New Roman, serif"><FONT SIZE=3><SPAN LANG="id-ID"><SPAN STYLE="font-style: normal"><SPAN STYLE="background: #ffff00">....</SPAN></SPAN></SPAN></FONT></FONT></FONT></FONT></P>
	<LI><P STYLE="margin-top: 0in; margin-bottom: 0in; line-height: 0.17in">
	<FONT FACE="Arial, serif"><FONT SIZE=2 STYLE="font-size: 11pt"><FONT FACE="Times New Roman, serif"><FONT SIZE=3><SPAN LANG="id-ID"><SPAN STYLE="font-style: normal">Aplikasi
	ini dapat digunakan oleh semua user yang terhubung koneksi internet.</SPAN></SPAN></FONT></FONT></FONT></FONT></P>
</OL>
<P LANG="id-ID" STYLE="margin-top: 0in; margin-bottom: 0in; line-height: 0.17in">
<BR>
</P>
<P LANG="id-ID" CLASS="western" STYLE="margin-top: 0in; margin-bottom: 0in; line-height: 100%">
<BR>
</P>
<OL START=3>
	<LI><H1 CLASS="western" STYLE="page-break-before: always"><A NAME="_Toc485163109"></A><A NAME="_Toc439994682"></A>
	<SPAN LANG="id-ID">Kebutuhan</SPAN> <SPAN LANG="id-ID">Antarmuka
	Eksternal</SPAN></H1>
	<OL>
		<LI><H2 CLASS="western"><A NAME="_Toc485163110"></A>User Interfaces
				</H2>
	</OL>
</OL>
<P ALIGN=JUSTIFY STYLE="text-indent: 0.39in; margin-top: 0in; margin-bottom: 0in; line-height: 0.17in">
<FONT FACE="Arial, serif"><FONT SIZE=2 STYLE="font-size: 11pt"><FONT FACE="Times New Roman, serif"><FONT SIZE=3><SPAN LANG="id-ID"><SPAN STYLE="font-style: normal">Aplikasi
ini menggunakan antarmuka berbasis web. Rancangan antarmuka ini
bertujuan untuk memperjelas mengenai program pada sistem ini.</SPAN></SPAN></FONT></FONT></FONT></FONT></P>
<P LANG="id-ID" ALIGN=JUSTIFY STYLE="text-indent: 0.39in; margin-top: 0in; margin-bottom: 0in; font-style: normal; line-height: 0.17in">
<BR>
</P>
<OL>
	<LI><P ALIGN=JUSTIFY STYLE="margin-top: 0in; margin-bottom: 0.14in; display: none; line-height: 115%">
	</P>
	<LI><P ALIGN=JUSTIFY STYLE="margin-top: 0in; margin-bottom: 0.14in; display: none; line-height: 115%">
	</P>
	<LI><P ALIGN=JUSTIFY STYLE="margin-top: 0in; margin-bottom: 0.14in; display: none; line-height: 115%">
	</P>
	<OL>
		<LI><P ALIGN=JUSTIFY STYLE="margin-top: 0in; margin-bottom: 0.14in; display: none; line-height: 115%">
		</P>
		<OL>
			<LI><P ALIGN=JUSTIFY STYLE="margin-top: 0in; margin-bottom: 0.14in; line-height: 115%">
			Login</P>
			<LI><P ALIGN=JUSTIFY STYLE="margin-top: 0in; margin-bottom: 0.14in; line-height: 115%">
			Register</P>
			<LI><P ALIGN=JUSTIFY STYLE="margin-top: 0in; margin-bottom: 0.14in; line-height: 115%">
			<SPAN LANG="id-ID">Dashboard</SPAN></P>
			<LI><P ALIGN=JUSTIFY STYLE="margin-top: 0in; margin-bottom: 0.14in; line-height: 115%">
			Halaman <SPAN LANG="id-ID">Tambah Pertanyaan</SPAN></P>
			<LI><P ALIGN=JUSTIFY STYLE="margin-top: 0in; margin-bottom: 0.14in; line-height: 115%">
			Halaman <SPAN LANG="id-ID">Preview Pertanyaan</SPAN></P>
			<LI><P ALIGN=JUSTIFY STYLE="margin-top: 0in; margin-bottom: 0.14in; line-height: 115%">
			Halaman <SPAN LANG="id-ID">Lihat Respon</SPAN></P>
			<LI><P ALIGN=JUSTIFY STYLE="margin-top: 0in; margin-bottom: 0.14in; line-height: 115%">
			Halaman <SPAN LANG="id-ID">Menjawab Pertanyaan</SPAN></P>
		</OL>
	</OL>
</OL>
<OL>
	<OL START=2>
		<LI><H2 CLASS="western"><A NAME="_Toc485163111"></A><A NAME="_Toc453325627"></A>
		<SPAN LANG="id-ID">Hardware Interface</SPAN></H2>
	</OL>
</OL>
<TABLE WIDTH=658 CELLPADDING=7 CELLSPACING=0>
	<COL WIDTH=314>
	<COL WIDTH=314>
	<TR VALIGN=TOP>
		<TD WIDTH=314 STYLE="border: 1px solid #000001; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P CLASS="western" ALIGN=CENTER STYLE="margin-top: 0in"><FONT FACE="Times, serif"><FONT FACE="Times New Roman, serif"><SPAN LANG="id-ID"><B>Hardware</B></SPAN></FONT></FONT></P>
		</TD>
		<TD WIDTH=314 STYLE="border: 1px solid #000001; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P CLASS="western" ALIGN=CENTER STYLE="margin-top: 0in"><FONT FACE="Times, serif"><FONT FACE="Times New Roman, serif"><SPAN LANG="id-ID"><B>Function</B></SPAN></FONT></FONT></P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=314 STYLE="border: 1px solid #000001; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P CLASS="western" STYLE="margin-top: 0in"><FONT FACE="Times, serif"><FONT FACE="Times New Roman, serif"><SPAN LANG="id-ID">Monitor</SPAN></FONT></FONT></P>
		</TD>
		<TD WIDTH=314 STYLE="border: 1px solid #000001; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P LANG="id-ID" CLASS="western" STYLE="margin-top: 0in"><BR>
			</P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=314 STYLE="border: 1px solid #000001; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P CLASS="western" STYLE="margin-top: 0in"><FONT FACE="Times, serif"><FONT FACE="Times New Roman, serif"><SPAN LANG="id-ID">Mouse</SPAN></FONT></FONT></P>
		</TD>
		<TD WIDTH=314 STYLE="border: 1px solid #000001; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P LANG="id-ID" CLASS="western" STYLE="margin-top: 0in"><BR>
			</P>
		</TD>
	</TR>
</TABLE>
<P LANG="id-ID" CLASS="western" STYLE="text-indent: 0.39in; margin-top: 0in; margin-bottom: 0in; line-height: 0.17in">
<BR>
</P>
<OL>
	<OL START=3>
		<LI><H2 CLASS="western"><A NAME="_Toc485163112"></A><A NAME="_Toc453325628"></A>
		<SPAN LANG="id-ID">Software Interface</SPAN></H2>
	</OL>
</OL>
<TABLE WIDTH=662 CELLPADDING=7 CELLSPACING=0>
	<COL WIDTH=316>
	<COL WIDTH=316>
	<TR VALIGN=TOP>
		<TD WIDTH=316 STYLE="border: 1px solid #000001; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P CLASS="western" ALIGN=CENTER STYLE="margin-top: 0in"><FONT FACE="Times, serif"><B>Jenis
			Software</B></FONT></P>
		</TD>
		<TD WIDTH=316 STYLE="border: 1px solid #000001; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P CLASS="western" ALIGN=CENTER STYLE="margin-top: 0in"><FONT FACE="Times, serif"><B>Kebutuhan
			Hardware</B></FONT></P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=316 STYLE="border: 1px solid #000001; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P CLASS="western" STYLE="margin-top: 0in"><FONT FACE="Times, serif">Sistem
			Operasi</FONT></P>
		</TD>
		<TD WIDTH=316 STYLE="border: 1px solid #000001; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P CLASS="western" STYLE="margin-top: 0in"><BR>
			</P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=316 STYLE="border: 1px solid #000001; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P CLASS="western" STYLE="margin-top: 0in"><FONT FACE="Times, serif">Bahasa
			Pemrograman</FONT></P>
		</TD>
		<TD WIDTH=316 STYLE="border: 1px solid #000001; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P CLASS="western" STYLE="margin-top: 0in"><BR>
			</P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=316 STYLE="border: 1px solid #000001; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P CLASS="western" STYLE="margin-top: 0in"><FONT FACE="Times, serif">Pengolah
			Database</FONT></P>
		</TD>
		<TD WIDTH=316 STYLE="border: 1px solid #000001; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P CLASS="western" STYLE="margin-top: 0in"><BR>
			</P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=316 STYLE="border: 1px solid #000001; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P CLASS="western" STYLE="margin-top: 0in"><FONT FACE="Times, serif">Framework</FONT></P>
		</TD>
		<TD WIDTH=316 STYLE="border: 1px solid #000001; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P CLASS="western" STYLE="margin-top: 0in"><BR>
			</P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=316 STYLE="border: 1px solid #000001; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P CLASS="western" STYLE="margin-top: 0in"><FONT FACE="Times, serif">Pemodelan
			Sistem</FONT></P>
		</TD>
		<TD WIDTH=316 STYLE="border: 1px solid #000001; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P CLASS="western" STYLE="margin-top: 0in"><BR>
			</P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=316 STYLE="border: 1px solid #000001; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P CLASS="western" STYLE="margin-top: 0in"><FONT FACE="Times, serif">Perancangan
			Database</FONT></P>
		</TD>
		<TD WIDTH=316 STYLE="border: 1px solid #000001; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P CLASS="western" STYLE="margin-top: 0in"><BR>
			</P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=316 STYLE="border: 1px solid #000001; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P CLASS="western" STYLE="margin-top: 0in"><FONT FACE="Times, serif">Perancangan
			Antar Muka</FONT></P>
		</TD>
		<TD WIDTH=316 STYLE="border: 1px solid #000001; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P CLASS="western" STYLE="margin-top: 0in"><BR>
			</P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=316 STYLE="border: 1px solid #000001; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P CLASS="western" STYLE="margin-top: 0in"><BR>
			</P>
		</TD>
		<TD WIDTH=316 STYLE="border: 1px solid #000001; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P CLASS="western" STYLE="margin-top: 0in"><BR>
			</P>
		</TD>
	</TR>
</TABLE>
<P LANG="id-ID" CLASS="western" STYLE="text-indent: -0.1in; margin-top: 0in; margin-bottom: 0in; line-height: 0.17in">
<BR>
</P>
<OL>
	<OL START=4>
		<LI><H2 CLASS="western"><A NAME="_Toc485163113"></A><A NAME="_Toc453325629"></A>
		<SPAN LANG="id-ID">Communication Interface</SPAN></H2>
	</OL>
</OL>
<P CLASS="western" STYLE="margin-top: 0in; margin-bottom: 0in; line-height: 100%">
<FONT FACE="Times, serif">&lt;Describe the requirements associated
with any communications functions required by this product, including
e-mail, web browser, network server communications protocols,
electronic forms, and so on. Define any pertinent message formatting.
Identify any communication standards that will be used, such as FTP
or HTTP. Specify any communication security or encryption issues,
data transfer rates, and synchronization mechanisms.&gt;</FONT></P>
<OL START=4>
	<LI><H1 CLASS="western" STYLE="page-break-before: always"><A NAME="_Toc485163114"></A>
	<SPAN LANG="id-ID">Functional Requirement</SPAN></H1>
</OL>
<OL START=4>
	<LI><P ALIGN=JUSTIFY STYLE="margin-top: 0in; margin-bottom: 0.14in; display: none; line-height: 115%">
	</P>
	<OL>
		<LI><P ALIGN=JUSTIFY STYLE="margin-top: 0in; margin-bottom: 0.14in; line-height: 115%">
		<B>Login</B></P>
		<OL>
			<LI><P ALIGN=JUSTIFY STYLE="margin-top: 0in; margin-bottom: 0.14in; line-height: 115%">
			<B><SPAN LANG="id-ID">Description and Priority</SPAN></B></P>
		</OL>
	</OL>
</OL>
<P ALIGN=JUSTIFY STYLE="margin-left: 1.28in; margin-top: 0in; margin-bottom: 0.14in; line-height: 115%">
<SPAN LANG="id-ID"><SPAN STYLE="font-weight: normal">Pada form login
inputan untuk dapat masuk ke dalam aplikasi adalah username dan
password yang sudah terdaftar di dalam database. Dari fungsi login
ini maka sistem akan memeriksa valid tidaknya data yang dimasukkan
dalam form login lalu sistem menampilkan halaman dashboard.</SPAN></SPAN></P>
<OL>
	<OL>
		<OL START=2>
			<LI><P ALIGN=JUSTIFY STYLE="margin-top: 0in; margin-bottom: 0.14in; line-height: 115%">
			<B><SPAN LANG="id-ID">Stimulus / Response Sequence</SPAN></B></P>
		</OL>
	</OL>
</OL>
<TABLE WIDTH=4369 CELLPADDING=7 CELLSPACING=0>
	<COL WIDTH=1674>
	<COL WIDTH=2665>
	<TR>
		<TD WIDTH=1674 STYLE="border: 1px solid #000001; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P ALIGN=CENTER STYLE="margin-top: 0in"><B>Aksi Aktor</B></P>
		</TD>
		<TD WIDTH=2665 STYLE="border: 1px solid #000001; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P ALIGN=CENTER STYLE="margin-top: 0in"><B>Reaksi Sistem</B></P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=1674 STYLE="border: 1px solid #000001; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<OL>
				<LI><P ALIGN=JUSTIFY STYLE="margin-top: 0in">User memasukan email
				dan password</P>
			</OL>
		</TD>
		<TD WIDTH=2665 STYLE="border: 1px solid #000001; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P ALIGN=JUSTIFY STYLE="margin-top: 0in"><BR>
			</P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=1674 STYLE="border: 1px solid #000001; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P ALIGN=JUSTIFY STYLE="margin-top: 0in"><BR>
			</P>
		</TD>
		<TD WIDTH=2665 STYLE="border: 1px solid #000001; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<OL START=2>
				<LI><P ALIGN=JUSTIFY STYLE="margin-top: 0in">Mem<SPAN LANG="id-ID">e</SPAN>riksa
				valid tidaknya data masukan dengan memeriksa ke table user.</P>
			</OL>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=1674 STYLE="border: 1px solid #000001; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P ALIGN=JUSTIFY STYLE="margin-top: 0in"><BR>
			</P>
		</TD>
		<TD WIDTH=2665 STYLE="border: 1px solid #000001; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<OL START=3>
				<LI><P ALIGN=JUSTIFY STYLE="margin-top: 0in">Masuk ke sistem
				sesuai dengan profile yang terdaftar</P>
			</OL>
		</TD>
	</TR>
</TABLE>
<P ALIGN=JUSTIFY STYLE="margin-left: 1.28in; margin-top: 0in; margin-bottom: 0.14in; font-weight: normal; line-height: 115%">
<BR><BR>
</P>
<OL>
	<OL>
		<OL START=3>
			<LI><P ALIGN=JUSTIFY STYLE="margin-top: 0in; margin-bottom: 0.14in; line-height: 115%">
			<B><SPAN LANG="id-ID">Functional Requirement</SPAN></B></P>
		</OL>
	</OL>
</OL>
<P ALIGN=JUSTIFY STYLE="margin-left: 1.28in; margin-top: 0in; margin-bottom: 0.14in; line-height: 115%">
<SPAN LANG="id-ID"><SPAN STYLE="font-weight: normal">REQ 1 : </SPAN></SPAN><SPAN STYLE="font-weight: normal">Jika
input yang dimasukan salah atau tidak terdaftar di database maka
sistem akan menampilkan pesan kesalahan dan kembali ke menu form
login.</SPAN></P>
<P ALIGN=JUSTIFY STYLE="margin-top: 0in; margin-bottom: 0.14in; line-height: 115%">
<BR><BR>
</P>
<OL>
	<OL START=2>
		<LI><P ALIGN=JUSTIFY STYLE="margin-top: 0in; margin-bottom: 0.14in; line-height: 115%">
		<B><SPAN LANG="id-ID">Register</SPAN></B></P>
		<OL>
			<LI><P ALIGN=JUSTIFY STYLE="margin-top: 0in; margin-bottom: 0.14in; line-height: 115%">
			<B><SPAN LANG="id-ID">Description and Priority</SPAN></B></P>
		</OL>
	</OL>
</OL>
<P ALIGN=JUSTIFY STYLE="margin-left: 1.25in; margin-top: 0in; margin-bottom: 0.14in; line-height: 115%">
<SPAN LANG="id-ID"><SPAN STYLE="font-weight: normal">User harus
melakukan register jika belum memiliki akun agar dapat mengakses
aplikasi ini.</SPAN></SPAN></P>
<OL>
	<OL>
		<OL START=2>
			<LI><P ALIGN=JUSTIFY STYLE="margin-top: 0in; margin-bottom: 0.14in; line-height: 115%">
			<B><SPAN LANG="id-ID">Stimulus / Response Sequence</SPAN></B></P>
		</OL>
	</OL>
</OL>
<TABLE WIDTH=538 CELLPADDING=7 CELLSPACING=0>
	<COL WIDTH=253>
	<COL WIDTH=254>
	<TR VALIGN=TOP>
		<TD WIDTH=253 STYLE="border: 1px solid #000001; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P ALIGN=CENTER STYLE="margin-top: 0in"><B>Aksi Aktor</B></P>
		</TD>
		<TD WIDTH=254 STYLE="border: 1px solid #000001; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P ALIGN=CENTER STYLE="margin-top: 0in"><B>Reaksi Sistem</B></P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=253 STYLE="border: 1px solid #000001; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<OL>
				<LI><P ALIGN=JUSTIFY STYLE="margin-top: 0in"><SPAN LANG="id-ID">User
				</SPAN>mendaftarkan <SPAN LANG="id-ID">username</SPAN></P>
			</OL>
		</TD>
		<TD WIDTH=254 STYLE="border: 1px solid #000001; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P ALIGN=JUSTIFY STYLE="margin-top: 0in"><BR>
			</P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=253 STYLE="border: 1px solid #000001; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P ALIGN=JUSTIFY STYLE="margin-top: 0in"><BR>
			</P>
		</TD>
		<TD WIDTH=254 STYLE="border: 1px solid #000001; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<OL START=2>
				<LI><P ALIGN=JUSTIFY STYLE="margin-top: 0in">Sistem <SPAN LANG="id-ID">memeriksa
				apakah username sudah terdaftar atau belum</SPAN></P>
			</OL>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=253 STYLE="border: 1px solid #000001; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<OL START=3>
				<LI><P ALIGN=JUSTIFY STYLE="margin-top: 0in"><SPAN LANG="id-ID">Jika
				username sudah ada, maka kembali ke form register. Jika belum ada
				maka user masuk ke form login</SPAN></P>
			</OL>
		</TD>
		<TD WIDTH=254 STYLE="border: 1px solid #000001; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P ALIGN=JUSTIFY STYLE="margin-top: 0in"><BR>
			</P>
		</TD>
	</TR>
</TABLE>
<P ALIGN=JUSTIFY STYLE="margin-left: 1.25in; margin-top: 0in; margin-bottom: 0.14in; line-height: 115%">
<BR><BR>
</P>
<OL>
	<OL>
		<OL START=3>
			<LI><P ALIGN=JUSTIFY STYLE="margin-top: 0in; margin-bottom: 0.14in; line-height: 115%">
			<B><SPAN LANG="id-ID">Functional Requirement</SPAN></B></P>
		</OL>
	</OL>
</OL>
<P ALIGN=JUSTIFY STYLE="margin-left: 1.25in; margin-top: 0in; margin-bottom: 0.14in; line-height: 115%">
<SPAN LANG="id-ID"><SPAN STYLE="font-weight: normal">REQ 1 : Jika
input username sudah ada di database maka sistem akan menampilkan
pesan bahwa username tersebut sudah ada dan akan dikembalikan ke
halaman register untuk diinput username yang lainnya.</SPAN></SPAN></P>
<OL>
	<OL START=3>
		<LI><P ALIGN=JUSTIFY STYLE="margin-top: 0in; margin-bottom: 0.14in; line-height: 115%">
		<B><SPAN LANG="id-ID">Halaman Buat Pertanyaan</SPAN></B></P>
		<OL>
			<LI><P ALIGN=JUSTIFY STYLE="margin-top: 0in; margin-bottom: 0.14in; line-height: 115%">
			<B><SPAN LANG="id-ID">Description and Priority</SPAN></B></P>
		</OL>
	</OL>
</OL>
<P ALIGN=JUSTIFY STYLE="margin-left: 1.25in; margin-top: 0in; margin-bottom: 0.14in; line-height: 115%">
<SPAN LANG="id-ID"><SPAN STYLE="font-weight: normal">User dapat
membuat pertanyaan dengan input judul pertanyaan terlebih dahulu,
lalu klik tombol tambah pertanyaan dan kemudian dapat membuat
bermacam – macam pertanyaan.</SPAN></SPAN></P>
<OL>
	<OL>
		<OL START=2>
			<LI><P ALIGN=JUSTIFY STYLE="margin-top: 0in; margin-bottom: 0.14in; line-height: 115%">
			<B><SPAN LANG="id-ID">Stimulus / Response Sequence</SPAN></B></P>
		</OL>
	</OL>
</OL>
<TABLE WIDTH=538 CELLPADDING=7 CELLSPACING=0>
	<COL WIDTH=253>
	<COL WIDTH=254>
	<TR VALIGN=TOP>
		<TD WIDTH=253 STYLE="border: 1px solid #000001; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P ALIGN=CENTER STYLE="margin-top: 0in"><B>Aksi Aktor</B></P>
		</TD>
		<TD WIDTH=254 STYLE="border: 1px solid #000001; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P ALIGN=CENTER STYLE="margin-top: 0in"><B>Reaksi Sistem</B></P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=253 STYLE="border: 1px solid #000001; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<OL>
				<LI><P ALIGN=JUSTIFY STYLE="margin-top: 0in"><SPAN LANG="id-ID">User
				</SPAN>input judul pertanyaan</P>
			</OL>
		</TD>
		<TD WIDTH=254 STYLE="border: 1px solid #000001; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P ALIGN=JUSTIFY STYLE="margin-top: 0in"><BR>
			</P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=253 STYLE="border: 1px solid #000001; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<OL START=2>
				<LI><P ALIGN=JUSTIFY STYLE="margin-top: 0in"><SPAN LANG="id-ID">User
				Klik tombol Tambah Pertanyaan</SPAN></P>
			</OL>
		</TD>
		<TD WIDTH=254 STYLE="border: 1px solid #000001; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P ALIGN=JUSTIFY STYLE="margin-left: 0.5in; margin-top: 0in"><BR>
			</P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=253 STYLE="border: 1px solid #000001; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P ALIGN=JUSTIFY STYLE="margin-left: 0.5in; margin-top: 0in"><BR>
			</P>
		</TD>
		<TD WIDTH=254 STYLE="border: 1px solid #000001; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<OL START=3>
				<LI><P ALIGN=JUSTIFY STYLE="margin-top: 0in"><SPAN LANG="id-ID">Aplikasi
				akan menampilkan window pop up untuk user agar dapat input
				pertanyaan dan pilihan – pilihannya.</SPAN></P>
			</OL>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=253 STYLE="border: 1px solid #000001; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<OL START=4>
				<LI><P ALIGN=JUSTIFY STYLE="margin-top: 0in"><SPAN LANG="id-ID">User
				klik Simpan Pertanyaan</SPAN></P>
			</OL>
		</TD>
		<TD WIDTH=254 STYLE="border: 1px solid #000001; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P LANG="id-ID" ALIGN=JUSTIFY STYLE="margin-left: 0.5in; margin-top: 0in">
			<BR>
			</P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=253 STYLE="border: 1px solid #000001; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P LANG="id-ID" ALIGN=JUSTIFY STYLE="margin-left: 0.5in; margin-top: 0in">
			<BR>
			</P>
		</TD>
		<TD WIDTH=254 STYLE="border: 1px solid #000001; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<OL START=5>
				<LI><P ALIGN=JUSTIFY STYLE="margin-top: 0in"><SPAN LANG="id-ID">Aplikasi
				akan menyimpan pertanyaan ke database.</SPAN></P>
			</OL>
		</TD>
	</TR>
</TABLE>
<P ALIGN=JUSTIFY STYLE="margin-left: 1.25in; margin-top: 0in; margin-bottom: 0.14in; line-height: 115%">
<BR><BR>
</P>
<OL>
	<OL>
		<OL START=3>
			<LI><P ALIGN=JUSTIFY STYLE="margin-top: 0in; margin-bottom: 0.14in; line-height: 115%">
			<B><SPAN LANG="id-ID">Functional Requirement</SPAN></B></P>
		</OL>
	</OL>
</OL>
<P ALIGN=JUSTIFY STYLE="margin-left: 1.25in; margin-top: 0in; margin-bottom: 0.14in; line-height: 115%">
<SPAN LANG="id-ID"><SPAN STYLE="font-weight: normal">REQ 1	: Jika
User tidak input judul pertanyaan, maka user tidak dapat klik tombol
tambah pertanyaan.</SPAN></SPAN></P>
<P ALIGN=JUSTIFY STYLE="margin-left: 1.25in; margin-top: 0in; margin-bottom: 0.14in; line-height: 115%">
<SPAN LANG="id-ID"><SPAN STYLE="font-weight: normal">REQ 2	: Jika
User input pilihan hanya 1, maka user tidak dapat melanjutkan untuk
menambahkan jumlah pertanyaan. </SPAN></SPAN>
</P>
<OL>
	<OL START=4>
		<LI><P ALIGN=JUSTIFY STYLE="margin-top: 0in; margin-bottom: 0.14in; line-height: 115%"><A NAME="_GoBack"></A>
		</P>
	</OL>
</OL>
<P LANG="id-ID" STYLE="margin-top: 0in; margin-bottom: 0in; font-style: normal; line-height: 0.17in">
<BR>
</P>
<P LANG="id-ID" STYLE="margin-top: 0in; margin-bottom: 0in; line-height: 0.17in">
<BR>
</P>
<P STYLE="margin-top: 0in; margin-bottom: 0in; line-height: 0.17in"><FONT FACE="Arial, serif"><FONT SIZE=2 STYLE="font-size: 11pt"><I><SPAN LANG="id-ID">&lt;Tulis
Kebutuhan Fungsional / Functional Requirement disini&gt;</SPAN></I></FONT></FONT></P>
<P LANG="en-GB" STYLE="margin-top: 0in; margin-bottom: 0in"><FONT SIZE=2><I><FONT FACE="Arial, serif"><SPAN LANG="id-ID">Diawali
dengan membuat daftar kebutuhan fungsional P/L, lengkap dengan ID dan
penjelasan jika perlu. Bisa dibuat dalam bentuk tabel.</SPAN></FONT></I></FONT></P>
<P LANG="id-ID" CLASS="western" STYLE="margin-top: 0in; margin-bottom: 0in; line-height: 0.17in">
<BR>
</P>
<TABLE WIDTH=621 CELLPADDING=7 CELLSPACING=0>
	<COL WIDTH=68>
	<COL WIDTH=288>
	<COL WIDTH=221>
	<THEAD>
		<TR VALIGN=TOP>
			<TD WIDTH=68 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
				<P CLASS="western" STYLE="margin-top: 0in"><FONT FACE="Times, serif"><SPAN LANG="id-ID"><B>ID</B></SPAN></FONT></P>
			</TD>
			<TD WIDTH=288 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
				<P CLASS="western" STYLE="margin-top: 0in"><FONT FACE="Times, serif"><SPAN LANG="id-ID"><B>Kebutuhan
				Fungsional</B></SPAN></FONT></P>
			</TD>
			<TD WIDTH=221 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
				<P CLASS="western" STYLE="margin-top: 0in"><FONT FACE="Times, serif"><SPAN LANG="id-ID"><B>Penjelasan</B></SPAN></FONT></P>
			</TD>
		</TR>
	</THEAD>
	<TBODY>
		<TR VALIGN=TOP>
			<TD WIDTH=68 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
				<P ALIGN=JUSTIFY STYLE="margin-left: 0.25in; text-indent: -0.25in; margin-top: 0.04in">
				<BR>
				</P>
			</TD>
			<TD WIDTH=288 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
				<P ALIGN=JUSTIFY STYLE="margin-left: 0.25in; text-indent: -0.25in; margin-top: 0.04in">
				<BR>
				</P>
			</TD>
			<TD WIDTH=221 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
				<P CLASS="western" STYLE="margin-top: 0in"><BR>
				</P>
			</TD>
		</TR>
		<TR VALIGN=TOP>
			<TD WIDTH=68 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
				<P CLASS="western" STYLE="margin-top: 0in"><BR>
				</P>
			</TD>
			<TD WIDTH=288 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
				<P CLASS="western" STYLE="margin-top: 0in"><BR>
				</P>
			</TD>
			<TD WIDTH=221 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
				<P CLASS="western" STYLE="margin-top: 0in"><BR>
				</P>
			</TD>
		</TR>
		<TR VALIGN=TOP>
			<TD WIDTH=68 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
				<P CLASS="western" STYLE="margin-top: 0in"><BR>
				</P>
			</TD>
			<TD WIDTH=288 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
				<P CLASS="western" STYLE="margin-top: 0in"><BR>
				</P>
			</TD>
			<TD WIDTH=221 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
				<P CLASS="western" STYLE="margin-top: 0in"><BR>
				</P>
			</TD>
		</TR>
		<TR VALIGN=TOP>
			<TD WIDTH=68 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
				<P CLASS="western" STYLE="margin-top: 0in"><BR>
				</P>
			</TD>
			<TD WIDTH=288 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
				<P CLASS="western" STYLE="margin-top: 0in"><BR>
				</P>
			</TD>
			<TD WIDTH=221 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
				<P CLASS="western" STYLE="margin-top: 0in"><BR>
				</P>
			</TD>
		</TR>
		<TR VALIGN=TOP>
			<TD WIDTH=68 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
				<P CLASS="western" STYLE="margin-top: 0in"><BR>
				</P>
			</TD>
			<TD WIDTH=288 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
				<P CLASS="western" STYLE="margin-top: 0in"><BR>
				</P>
			</TD>
			<TD WIDTH=221 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
				<P CLASS="western" STYLE="margin-top: 0in"><BR>
				</P>
			</TD>
		</TR>
		<TR VALIGN=TOP>
			<TD WIDTH=68 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
				<P CLASS="western" STYLE="margin-top: 0in"><BR>
				</P>
			</TD>
			<TD WIDTH=288 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
				<P CLASS="western" STYLE="margin-top: 0in"><BR>
				</P>
			</TD>
			<TD WIDTH=221 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
				<P CLASS="western" STYLE="margin-top: 0in"><BR>
				</P>
			</TD>
		</TR>
		<TR VALIGN=TOP>
			<TD WIDTH=68 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
				<P CLASS="western" STYLE="margin-top: 0in"><BR>
				</P>
			</TD>
			<TD WIDTH=288 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
				<P CLASS="western" STYLE="margin-top: 0in"><BR>
				</P>
			</TD>
			<TD WIDTH=221 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
				<P CLASS="western" STYLE="margin-top: 0in"><BR>
				</P>
			</TD>
		</TR>
		<TR VALIGN=TOP>
			<TD WIDTH=68 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
				<P CLASS="western" STYLE="margin-top: 0in"><BR>
				</P>
			</TD>
			<TD WIDTH=288 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
				<P CLASS="western" STYLE="margin-top: 0in"><BR>
				</P>
			</TD>
			<TD WIDTH=221 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
				<P CLASS="western" STYLE="margin-top: 0in"><BR>
				</P>
			</TD>
		</TR>
		<TR VALIGN=TOP>
			<TD WIDTH=68 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
				<P CLASS="western" STYLE="margin-top: 0in"><BR>
				</P>
			</TD>
			<TD WIDTH=288 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
				<P CLASS="western" STYLE="margin-top: 0in"><BR>
				</P>
			</TD>
			<TD WIDTH=221 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
				<P CLASS="western" STYLE="margin-top: 0in"><BR>
				</P>
			</TD>
		</TR>
		<TR VALIGN=TOP>
			<TD WIDTH=68 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
				<P CLASS="western" STYLE="margin-top: 0in"><BR>
				</P>
			</TD>
			<TD WIDTH=288 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
				<P CLASS="western" STYLE="margin-top: 0in"><BR>
				</P>
			</TD>
			<TD WIDTH=221 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
				<P LANG="sv-SE" CLASS="western" STYLE="margin-top: 0in"><BR>
				</P>
			</TD>
		</TR>
		<TR VALIGN=TOP>
			<TD WIDTH=68 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
				<P LANG="sv-SE" CLASS="western" STYLE="margin-top: 0in"><BR>
				</P>
			</TD>
			<TD WIDTH=288 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
				<P LANG="sv-SE" CLASS="western" STYLE="margin-top: 0in"><BR>
				</P>
			</TD>
			<TD WIDTH=221 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
				<P CLASS="western" STYLE="margin-top: 0in"><BR>
				</P>
			</TD>
		</TR>
		<TR VALIGN=TOP>
			<TD WIDTH=68 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
				<P CLASS="western" STYLE="margin-top: 0in"><BR>
				</P>
			</TD>
			<TD WIDTH=288 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
				<P CLASS="western" STYLE="margin-top: 0in"><BR>
				</P>
			</TD>
			<TD WIDTH=221 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
				<P CLASS="western" STYLE="margin-top: 0in"><BR>
				</P>
			</TD>
		</TR>
	</TBODY>
</TABLE>
<P LANG="id-ID" STYLE="margin-top: 0in; margin-bottom: 0in; font-style: normal; line-height: 0.17in">
<BR>
</P>
<OL>
	<OL>
		<LI><H2 CLASS="western"><A NAME="_Toc439994688"></A><A NAME="_Toc485163115"></A>
		<SPAN LANG="id-ID">Use Case Diagram</SPAN></H2>
	</OL>
</OL>
<P CLASS="western" STYLE="margin-top: 0in; margin-bottom: 0in; line-height: 0.17in">
<FONT FACE="Times, serif"><FONT FACE="Arial, serif"><FONT SIZE=2 STYLE="font-size: 11pt"><SPAN LANG="id-ID">&lt;</SPAN></FONT></FONT><FONT FACE="Arial, serif"><FONT SIZE=2 STYLE="font-size: 11pt"><SPAN LANG="id-ID"><I>Gambarkan
use case diagramnya dari functional requirement yang didapatkan</I></SPAN></FONT></FONT><FONT FACE="Arial, serif"><FONT SIZE=2 STYLE="font-size: 11pt"><SPAN LANG="id-ID">&gt;</SPAN></FONT></FONT></FONT></P>
<OL>
	<OL START=2>
		<LI><H2 CLASS="western"><A NAME="_Toc485163116"></A><SPAN LANG="id-ID">Nama
		Use Case 1 </SPAN>
		</H2>
	</OL>
</OL>
<P STYLE="margin-left: 0.44in; line-height: 0.17in"><FONT FACE="Times, serif">4.1.1	De<SPAN LANG="id-ID">skripsi
Use Case</SPAN> </FONT>
</P>
<P STYLE="margin-left: 0.94in; text-indent: -0.5in; margin-top: 0in; margin-bottom: 0in; line-height: 0.15in">
<FONT FACE="Arial, serif"><FONT SIZE=2 STYLE="font-size: 11pt"><I>&lt;<SPAN LANG="id-ID">desripsikan
/ jabarkan mengenai use case ini</SPAN> &gt;</I></FONT></FONT></P>
<P STYLE="margin-left: 0.44in; line-height: 0.17in"><FONT FACE="Times, serif">4.1.2	Stimulus<SPAN LANG="id-ID">
and </SPAN>Respon</FONT></P>
<P STYLE="margin-left: 0.94in; text-indent: -0.5in; margin-top: 0in; margin-bottom: 0in; line-height: 0.15in">
<FONT FACE="Arial, serif"><FONT SIZE=2 STYLE="font-size: 11pt"><I>&lt;<SPAN LANG="id-ID">menyediakan
daftar aksi yang dilakukan oleh user dan respon dari sistem</SPAN>.&gt;</I></FONT></FONT></P>
<P LANG="id-ID" STYLE="margin-left: 0.94in; text-indent: -0.5in; margin-top: 0in; margin-bottom: 0in; line-height: 0.15in">
<BR>
</P>
<TABLE WIDTH=658 CELLPADDING=7 CELLSPACING=0>
	<COL WIDTH=311>
	<COL WIDTH=316>
	<TR VALIGN=TOP>
		<TD WIDTH=311 STYLE="border: 1px solid #000001; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P ALIGN=CENTER STYLE="margin-left: 0.94in; text-indent: -0.5in; margin-top: 0in">
			<FONT FACE="Arial, serif"><FONT SIZE=2 STYLE="font-size: 11pt"><I><SPAN LANG="id-ID">Action
			by user</SPAN></I></FONT></FONT></P>
		</TD>
		<TD WIDTH=316 STYLE="border: 1px solid #000001; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P ALIGN=CENTER STYLE="margin-left: 0.94in; text-indent: -0.5in; margin-top: 0in">
			<FONT FACE="Arial, serif"><FONT SIZE=2 STYLE="font-size: 11pt"><I><SPAN LANG="id-ID">Response
			from system</SPAN></I></FONT></FONT></P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=311 STYLE="border: 1px solid #000001; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P STYLE="margin-left: 0.94in; text-indent: -0.5in; margin-top: 0in">
			<FONT FACE="Arial, serif"><FONT SIZE=2 STYLE="font-size: 11pt"><SPAN LANG="id-ID"><SPAN STYLE="font-style: normal">1</SPAN></SPAN></FONT></FONT></P>
		</TD>
		<TD WIDTH=316 STYLE="border: 1px solid #000001; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P LANG="id-ID" STYLE="margin-left: 0.94in; text-indent: -0.5in; margin-top: 0in">
			<BR>
			</P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=311 STYLE="border: 1px solid #000001; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P LANG="id-ID" STYLE="margin-left: 0.94in; text-indent: -0.5in; margin-top: 0in; font-style: normal">
			<BR>
			</P>
		</TD>
		<TD WIDTH=316 STYLE="border: 1px solid #000001; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P STYLE="margin-left: 0.94in; text-indent: -0.5in; margin-top: 0in">
			<FONT FACE="Arial, serif"><FONT SIZE=2 STYLE="font-size: 11pt"><SPAN LANG="id-ID"><SPAN STYLE="font-style: normal">2</SPAN></SPAN></FONT></FONT></P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=311 STYLE="border: 1px solid #000001; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P STYLE="margin-left: 0.94in; text-indent: -0.5in; margin-top: 0in">
			<FONT FACE="Arial, serif"><FONT SIZE=2 STYLE="font-size: 11pt"><SPAN LANG="id-ID"><SPAN STYLE="font-style: normal">3</SPAN></SPAN></FONT></FONT></P>
		</TD>
		<TD WIDTH=316 STYLE="border: 1px solid #000001; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P LANG="id-ID" STYLE="margin-left: 0.94in; text-indent: -0.5in; margin-top: 0in; font-style: normal">
			<BR>
			</P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=311 STYLE="border: 1px solid #000001; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P LANG="id-ID" STYLE="margin-left: 0.94in; text-indent: -0.5in; margin-top: 0in; font-style: normal">
			<BR>
			</P>
		</TD>
		<TD WIDTH=316 STYLE="border: 1px solid #000001; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P STYLE="margin-left: 0.94in; text-indent: -0.5in; margin-top: 0in">
			<FONT FACE="Arial, serif"><FONT SIZE=2 STYLE="font-size: 11pt"><SPAN LANG="id-ID"><SPAN STYLE="font-style: normal">4
			..</SPAN></SPAN></FONT></FONT></P>
		</TD>
	</TR>
</TABLE>
<P LANG="id-ID" STYLE="margin-left: 0.94in; text-indent: -0.5in; margin-top: 0in; margin-bottom: 0in; line-height: 0.15in">
<BR>
</P>
<P STYLE="margin-left: 0.44in; line-height: 0.17in"><FONT FACE="Times, serif">4.1.<SPAN LANG="id-ID">4</SPAN>	<SPAN LANG="id-ID"><I>Activity
Diagram</I></SPAN></FONT></P>
<OL>
	<OL START=3>
		<LI><H2 CLASS="western"><A NAME="_Toc485163117"></A><SPAN LANG="id-ID">Nama
		Use Case 2</SPAN></H2>
	</OL>
</OL>
<P CLASS="western" STYLE="text-indent: 0.5in; margin-top: 0in; margin-bottom: 0in; line-height: 0.17in">
<FONT FACE="Times, serif"><SPAN LANG="id-ID">&lt;Sama seperti di
atas</SPAN>, dan seterusnya sesuai jumlah use case yang didapatkan<SPAN LANG="id-ID">&gt;</SPAN></FONT></P>
<OL>
	<OL START=4>
		<LI><H2 CLASS="western"><A NAME="_Toc485163118"></A><SPAN LANG="id-ID">Class
		Diagram</SPAN></H2>
	</OL>
</OL>
<P CLASS="western" STYLE="margin-top: 0in; margin-bottom: 0in; line-height: 0.17in">
<FONT FACE="Times, serif"><SPAN LANG="id-ID">&lt;</SPAN><SPAN LANG="id-ID"><I>identifikasi
kelas yang terkait dan hubungannya pada sistem yang dikembangkan</I></SPAN><SPAN LANG="id-ID">&gt;</SPAN></FONT></P>
<P STYLE="margin-top: 0in; margin-bottom: 0in; line-height: 0.17in"><BR>
</P>
<P STYLE="margin-top: 0in; margin-bottom: 0in; line-height: 0.17in"><BR>
</P>
<P LANG="id-ID" CLASS="western" STYLE="margin-top: 0in; margin-bottom: 0in; line-height: 0.17in">
<BR>
</P>
<P STYLE="margin-top: 0in; margin-bottom: 0in; line-height: 0.17in"><BR>
</P>
<OL START=5>
	<LI><H1 CLASS="western" STYLE="page-break-before: always"><A NAME="_Toc439994690"></A><A NAME="_Toc485163119"></A>
	Non Functional Requirements</H1>
</OL>
<P CLASS="western" STYLE="margin-top: 0in; margin-bottom: 0in; line-height: 0.17in">
<FONT FACE="Times, serif"><SPAN LANG="id-ID">&lt;</SPAN><SPAN LANG="sv-SE"><I>Uraikan
dengan ringkas kebutuhan non fungsional dalam tabel sebagai berikut.
Isilah Kolom </I></SPAN><SPAN LANG="id-ID"><I>Kebutuhan</I></SPAN><SPAN LANG="sv-SE"><I>
dengan kalimat yang jelas dan kelak dapat ditest untuk dipenuhi. </I></SPAN><SPAN LANG="id-ID"><I>ID</I></SPAN><SPAN LANG="sv-SE"><I>
adalah nomor </I></SPAN><SPAN LANG="id-ID"><I>kebutuhan </I></SPAN><SPAN LANG="sv-SE"><I>yang
harus ditelusuri pada saat test. Tuliskan N/A bila Not Applicable&gt;</I></SPAN></FONT></P>
<P LANG="sv-SE" STYLE="margin-top: 0in; margin-bottom: 0in"><BR>
</P>
<TABLE WIDTH=595 CELLPADDING=7 CELLSPACING=0>
	<COL WIDTH=100>
	<COL WIDTH=101>
	<COL WIDTH=350>
	<THEAD>
		<TR VALIGN=TOP>
			<TD WIDTH=100 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
				<P CLASS="western" STYLE="margin-top: 0in"><FONT FACE="Times, serif"><SPAN LANG="id-ID"><B>ID</B></SPAN></FONT></P>
			</TD>
			<TD WIDTH=101 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
				<P CLASS="western" STYLE="margin-top: 0in"><FONT FACE="Times, serif"><B>Parameter</B></FONT></P>
			</TD>
			<TD WIDTH=350 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
				<P CLASS="western" STYLE="margin-top: 0in"><FONT FACE="Times, serif"><SPAN LANG="id-ID"><B>Kebutuhan</B></SPAN></FONT></P>
			</TD>
		</TR>
	</THEAD>
	<TBODY>
		<TR VALIGN=TOP>
			<TD WIDTH=100 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
				<P ALIGN=JUSTIFY STYLE="margin-left: 0.25in; text-indent: -0.25in; margin-top: 0.04in">
				<BR>
				</P>
			</TD>
			<TD WIDTH=101 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
				<P ALIGN=JUSTIFY STYLE="margin-left: 0.25in; text-indent: -0.25in; margin-top: 0.04in">
				<FONT FACE="Times, serif"><SPAN STYLE="font-weight: normal">Availability</SPAN></FONT></P>
			</TD>
			<TD WIDTH=350 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
				<P CLASS="western" STYLE="margin-top: 0in"><BR>
				</P>
			</TD>
		</TR>
		<TR VALIGN=TOP>
			<TD WIDTH=100 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
				<P CLASS="western" STYLE="margin-top: 0in"><BR>
				</P>
			</TD>
			<TD WIDTH=101 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
				<P CLASS="western" STYLE="margin-top: 0in"><FONT FACE="Times, serif">Reliability</FONT></P>
			</TD>
			<TD WIDTH=350 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
				<P CLASS="western" STYLE="margin-top: 0in"><BR>
				</P>
			</TD>
		</TR>
		<TR VALIGN=TOP>
			<TD WIDTH=100 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
				<P CLASS="western" STYLE="margin-top: 0in"><BR>
				</P>
			</TD>
			<TD WIDTH=101 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
				<P CLASS="western" STYLE="margin-top: 0in"><FONT FACE="Times, serif">Ergonomy</FONT></P>
			</TD>
			<TD WIDTH=350 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
				<P CLASS="western" STYLE="margin-top: 0in"><BR>
				</P>
			</TD>
		</TR>
		<TR VALIGN=TOP>
			<TD WIDTH=100 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
				<P CLASS="western" STYLE="margin-top: 0in"><BR>
				</P>
			</TD>
			<TD WIDTH=101 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
				<P CLASS="western" STYLE="margin-top: 0in"><FONT FACE="Times, serif">Portability</FONT></P>
			</TD>
			<TD WIDTH=350 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
				<P CLASS="western" STYLE="margin-top: 0in"><BR>
				</P>
			</TD>
		</TR>
		<TR VALIGN=TOP>
			<TD WIDTH=100 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
				<P CLASS="western" STYLE="margin-top: 0in"><BR>
				</P>
			</TD>
			<TD WIDTH=101 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
				<P CLASS="western" STYLE="margin-top: 0in"><FONT FACE="Times, serif">Memory</FONT></P>
			</TD>
			<TD WIDTH=350 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
				<P CLASS="western" STYLE="margin-top: 0in"><BR>
				</P>
			</TD>
		</TR>
		<TR VALIGN=TOP>
			<TD WIDTH=100 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
				<P CLASS="western" STYLE="margin-top: 0in"><BR>
				</P>
			</TD>
			<TD WIDTH=101 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
				<P CLASS="western" STYLE="margin-top: 0in"><FONT FACE="Times, serif">Response
				time</FONT></P>
			</TD>
			<TD WIDTH=350 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
				<P CLASS="western" STYLE="margin-top: 0in"><BR>
				</P>
			</TD>
		</TR>
		<TR VALIGN=TOP>
			<TD WIDTH=100 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
				<P CLASS="western" STYLE="margin-top: 0in"><BR>
				</P>
			</TD>
			<TD WIDTH=101 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
				<P CLASS="western" STYLE="margin-top: 0in"><FONT FACE="Times, serif">Safety</FONT></P>
			</TD>
			<TD WIDTH=350 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
				<P CLASS="western" STYLE="margin-top: 0in"><FONT FACE="Times, serif">N/A</FONT></P>
			</TD>
		</TR>
		<TR VALIGN=TOP>
			<TD WIDTH=100 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
				<P CLASS="western" STYLE="margin-top: 0in"><BR>
				</P>
			</TD>
			<TD WIDTH=101 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
				<P CLASS="western" STYLE="margin-top: 0in"><FONT FACE="Times, serif">Security</FONT></P>
			</TD>
			<TD WIDTH=350 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
				<P CLASS="western" STYLE="margin-top: 0in"><BR>
				</P>
			</TD>
		</TR>
		<TR VALIGN=TOP>
			<TD WIDTH=100 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
				<P CLASS="western" STYLE="margin-top: 0in"><BR>
				</P>
			</TD>
			<TD WIDTH=101 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
				<P CLASS="western" STYLE="margin-top: 0in"><BR>
				</P>
			</TD>
			<TD WIDTH=350 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
				<P CLASS="western" STYLE="margin-top: 0in"><BR>
				</P>
			</TD>
		</TR>
		<TR VALIGN=TOP>
			<TD WIDTH=100 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
				<P CLASS="western" STYLE="margin-top: 0in"><BR>
				</P>
			</TD>
			<TD WIDTH=101 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
				<P CLASS="western" STYLE="margin-top: 0in"><FONT FACE="Times, serif">Others
				1: Bahasa komunikasi</FONT></P>
			</TD>
			<TD WIDTH=350 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
				<P CLASS="western" STYLE="margin-top: 0in"><FONT FACE="Times, serif"><SPAN LANG="sv-SE">Misalnya
				: semua tanya jawab harus dalam bahasa Indonesia</SPAN></FONT></P>
			</TD>
		</TR>
		<TR VALIGN=TOP>
			<TD WIDTH=100 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
				<P LANG="sv-SE" CLASS="western" STYLE="margin-top: 0in"><BR>
				</P>
			</TD>
			<TD WIDTH=101 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
				<P LANG="sv-SE" CLASS="western" STYLE="margin-top: 0in"><BR>
				</P>
			</TD>
			<TD WIDTH=350 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
				<P CLASS="western" STYLE="margin-top: 0in"><FONT FACE="Times, serif">Setiap
				layar harus mengandung logo PT Pos Indonesia</FONT></P>
			</TD>
		</TR>
		<TR VALIGN=TOP>
			<TD WIDTH=100 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
				<P CLASS="western" STYLE="margin-top: 0in"><BR>
				</P>
			</TD>
			<TD WIDTH=101 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
				<P CLASS="western" STYLE="margin-top: 0in"><BR>
				</P>
			</TD>
			<TD WIDTH=350 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
				<P CLASS="western" STYLE="margin-top: 0in"><BR>
				</P>
			</TD>
		</TR>
	</TBODY>
</TABLE>
<P LANG="en-GB" STYLE="margin-top: 0in; margin-bottom: 0in"><BR>
</P>
<P LANG="en-GB" STYLE="margin-top: 0in; margin-bottom: 0in"><FONT SIZE=2><I>Catatan
:</I></FONT></P>
<P ALIGN=JUSTIFY STYLE="margin-left: 0.25in; text-indent: -0.25in; margin-top: 0in; margin-bottom: 0in; line-height: 125%">
<FONT FACE="Times, serif"><SPAN LANG="sv-SE"><I><SPAN STYLE="font-weight: normal">Availability
: ketersediaan aplikasi, misalnya harus terus menerus beroperasi 7
hari perminggu, 24 jam per haritanpa gagal</SPAN></I></SPAN></FONT></P>
<P CLASS="western" STYLE="margin-top: 0in; margin-bottom: 0in; line-height: 125%">
<FONT FACE="Times, serif"><SPAN LANG="sv-SE"><I>Reliability :
keandalan, misalnya tidak pernah boleh gagal(atau kegagalan yang
ditolerir adalah …%)  </I></SPAN><I>sehingga harus dipikirkan fault
tolerant architecture. Biasanya hanya perlu untuk Critical
Application yang jika gagal akan berakibat fatal.</I></FONT></P>
<P CLASS="western" STYLE="margin-top: 0in; margin-bottom: 0in; line-height: 125%">
<FONT FACE="Times, serif"><SPAN LANG="sv-SE"><I>Ergonomy : kenyamanan
pakai bagi pengguna</I></SPAN></FONT></P>
<P CLASS="western" STYLE="margin-top: 0in; margin-bottom: 0in; line-height: 125%">
<FONT FACE="Times, serif"><SPAN LANG="sv-SE"><I>Portability :
kemudahan untuk dibawa dan dioperasikan ke mesin/sistem
operasi/platform yang lain</I></SPAN></FONT></P>
<P CLASS="western" STYLE="margin-top: 0in; margin-bottom: 0in; line-height: 125%">
<FONT FACE="Times, serif"><SPAN LANG="sv-SE"><I>Memory : jika
perhitungan kapasitas memori internal kritis (misalnya untuk SW yang
harus dijadikan CHIPS dan ukurannya harus kecil</I></SPAN></FONT></P>
<P CLASS="western" STYLE="margin-top: 0in; margin-bottom: 0in; line-height: 125%">
<FONT FACE="Times, serif"><I>Response time : Batasan waktu yang harus
dipenuhi. Sangat penting untuk aplikasi Real Time. Contoh: “Aaplikasi
harus mampu menampilkan hasil dalam 4 detik”, atau “ATM harus
menarik kembali kartu yang tidak diambil dalam waktu 3 menit”</I></FONT></P>
<P CLASS="western" STYLE="margin-top: 0in; margin-bottom: 0in; line-height: 125%">
<FONT FACE="Times, serif"><SPAN LANG="sv-SE"><I>Safety: yang
menyangkut keselamatan manusia, misalnya untuk SW yang dipakai pada
sistem kontrol di pabrik</I></SPAN></FONT></P>
<P CLASS="western" STYLE="margin-top: 0in; margin-bottom: 0in; line-height: 125%">
<FONT FACE="Times, serif"><I>Security : aspek keamanan yang harus
dipenuhi</I></FONT></P>
<P STYLE="margin-top: 0in; margin-bottom: 0in; line-height: 0.17in"><BR>
</P>
<P STYLE="margin-top: 0in; margin-bottom: 0in; line-height: 0.17in"><BR>
</P>
</BODY>
</HTML>