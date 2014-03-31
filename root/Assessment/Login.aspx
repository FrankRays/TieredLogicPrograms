<%@ Page Title="" Language="C#" MasterPageFile="~/MasterPage.master" AutoEventWireup="true" CodeFile="Login.aspx.cs" Inherits="Login" %>

<asp:Content ID="Content1" ContentPlaceHolderID="head" Runat="Server">
</asp:Content>
<asp:Content ID="Content2" ContentPlaceHolderID="MainContent" Runat="Server">
    <h2>
        Log In
    </h2>
    <p>
        Please enter your email and password.
        <asp:HyperLink ID="RegisterHyperLink" runat="server" EnableViewState="False" 
            NavigateUrl="~/Register.aspx">Register</asp:HyperLink> &nbsp;if you don't have an account.
    </p>
    <div class="accountInfo">
        <span class="failureNotification">
            <asp:Literal ID="FailureText" runat="server"></asp:Literal>
            <asp:Label ID="lblMessage" runat="server" Text=""></asp:Label>
        </span>
        <fieldset class="login">
            <legend>Account Information</legend>
            <p>
                <asp:Label ID="EmailLabel" runat="server" AssociatedControlID="Email">Email:</asp:Label>
                <asp:TextBox ID="Email" runat="server" CssClass="textEntry"></asp:TextBox>
                <asp:RequiredFieldValidator ID="EmailRequired" runat="server" ControlToValidate="Email" 
                        CssClass="failureNotification" ErrorMessage="User Name is required." ToolTip="User Name is required." 
                        ValidationGroup="LoginUserValidationGroup">*</asp:RequiredFieldValidator>
            </p>
            <p>
                <asp:Label ID="PasswordLabel" runat="server" AssociatedControlID="Password">Password:</asp:Label>
                <asp:TextBox ID="Password" runat="server" CssClass="passwordEntry" TextMode="Password"></asp:TextBox>
                <asp:RequiredFieldValidator ID="PasswordRequired" runat="server" ControlToValidate="Password" 
                        CssClass="failureNotification" ErrorMessage="Password is required." ToolTip="Password is required." 
                        ValidationGroup="LoginUserValidationGroup">*</asp:RequiredFieldValidator>
            </p>                   
        </fieldset>
        <p class="submitButton">
            <asp:Button ID="LoginButton" runat="server" CommandName="Login" Text="Log In" 
                ValidationGroup="LoginUserValidationGroup" onclick="LoginButton_Click"/>
            &nbsp;
            <asp:Button ID="CancelButton" runat="server" CommandName="MoveNext" Text="Cancel" PostBackUrl="~/Home.aspx" />
        </p>
    </div>
</asp:Content>

