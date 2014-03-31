<%@ Page Title="" Language="C#" MasterPageFile="~/MasterPage.master" AutoEventWireup="true"
    CodeFile="Home.aspx.cs" Inherits="Home" %>

<asp:Content ID="Content1" ContentPlaceHolderID="head" runat="Server">
</asp:Content>
<asp:Content ID="Content2" ContentPlaceHolderID="SubMenuContent" runat="Server">
    <div class="clear hideSkiplink">
        <form action="" method="get" style="text-align: right">
        COURSE:&nbsp;
        <asp:DropDownList ID="ddlCourse" runat="server" AutoPostBack="True" OnSelectedIndexChanged="ddlCourse_SelectedIndexChanged">
            <asp:ListItem Value="">Select One...</asp:ListItem>
            <asp:ListItem Value="Massage Clinic">Massage Clinic</asp:ListItem>
            <asp:ListItem Value="Course 1">Course 2</asp:ListItem>
        </asp:DropDownList>
        MODULE:
        <asp:DropDownList ID="ddlModule" runat="server" AutoPostBack="True" OnSelectedIndexChanged="ddlModule_SelectedIndexChanged">
            <asp:ListItem Value="">Select One...</asp:ListItem>
            <asp:ListItem Value="Module 1">Module 1</asp:ListItem>
            <asp:ListItem Value="Module 2">Module 2</asp:ListItem>
            <asp:ListItem Value="Module 3">Module 3</asp:ListItem>
        </asp:DropDownList>
        STUDENT:
        <asp:DropDownList ID="ddlStudent" runat="server" AutoPostBack="True" OnSelectedIndexChanged="ddlStudent_SelectedIndexChanged">
            <asp:ListItem Value="">Select One...</asp:ListItem>
            <asp:ListItem Value="Student Alpha">Student Alpha</asp:ListItem>
            <asp:ListItem Value="Student Beta">Student Beta</asp:ListItem>
        </asp:DropDownList>
        </form>
    </div>
</asp:Content>
<asp:Content ID="Content3" ContentPlaceHolderID="MainContent" runat="Server">
    <div class="contentHeader">
        <span>Run an Assessment</span><br />
        <span>Faculty: Albert Dudley</span></div>
    <br />
    <div>
        <span class="labelInfo">Current student:&nbsp;</span><asp:Label ID="lblCurrentStudent"
            runat="server" Text=""></asp:Label></div>
    <div>
        <span class="labelInfo">Course:&nbsp;</span><asp:Label ID="lblCourse" runat="server"
            Text=""></asp:Label></div>
    <div>
        <span class="labelInfo">Module:&nbsp;</span><asp:Label ID="lblModule" runat="server"
            Text=""></asp:Label></div>
    <br />
    <div>
        <span>1. Demonstrates standard hygiene praties (ie: washes hands, etc.)</span></div>
    <asp:RadioButtonList ID="radQuestionOne" runat="server" RepeatDirection="Horizontal">
        <asp:ListItem>Inadequate</asp:ListItem>
        <asp:ListItem>Poor</asp:ListItem>
        <asp:ListItem>Satisfactory</asp:ListItem>
        <asp:ListItem>Good</asp:ListItem>
        <asp:ListItem>Excellent</asp:ListItem>
    </asp:RadioButtonList>
    <br />
    <div>
        <span>2. Maintain grooming, dress and hygience appropriate to the practice setting (ie:
            uniform, shoes, nametag, etc.)</span></div>
    <asp:RadioButtonList ID="radQuestionTwo" runat="server" RepeatDirection="Horizontal">
        <asp:ListItem>Inadequate</asp:ListItem>
        <asp:ListItem>Poor</asp:ListItem>
        <asp:ListItem>Satisfactory</asp:ListItem>
        <asp:ListItem>Good</asp:ListItem>
        <asp:ListItem>Excellent</asp:ListItem>
    </asp:RadioButtonList>
    <br />
    <div>
        <span>3. Apply standard precautions for infection control (ie: washing table, faceplate,
            clean sheets, etc.)</span></div>
    <asp:RadioButtonList ID="radQuestionThree" runat="server" RepeatDirection="Horizontal">
        <asp:ListItem>Inadequate</asp:ListItem>
        <asp:ListItem>Poor</asp:ListItem>
        <asp:ListItem>Satisfactory</asp:ListItem>
        <asp:ListItem>Good</asp:ListItem>
        <asp:ListItem>Excellent</asp:ListItem>
    </asp:RadioButtonList>
    <div>
        <span><b>Comments:</b></span></div>
    <asp:TextBox ID="txtComments" runat="server" TextMode="MultiLine" Height="100px"
        Width="90%"></asp:TextBox>
    <br />
    <div>
        <asp:Button ID="btnSave" runat="server" Text="Save Evaluation" OnClick="btnSave_Click" />
        <asp:Label ID="lblResult" runat="server" CssClass="resultMsg"></asp:Label>
    </div>
    <br />
    <div>
        <span>Please select another course or module from the dropdown menu above, or use the
            buttons below to view more results. </span>
    </div>
    <div>
        <asp:Button ID="btnPreviousModule" runat="server" Text="<< Previous Module" OnClick="btnPreviousModule_Click" />
        <asp:Button ID="btnNextModule" runat="server" Text="Next Module >>" OnClick="btnNextModule_Click" /></div>
</asp:Content>
