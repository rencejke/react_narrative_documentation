import React from 'react';
import { StoreContext } from '../../../../../../../store/StoreContext';
import useQueryData from '../../../../../../custom-hook/useQueryData';
import UIHeader from '../partials/UIHeader';
import UINavigation from '../../../partials/UINavigation';
import UIFooter from '../../../partials/UIFooter';
import CodeMain from './CodeMain';


const UICode = () => {
  const { store, dispatch } = React.useContext(StoreContext);
  const [info, setInfo] = React.useState(null);

  const {
    isLoading,
    isFetching,
    error,
    data: code,
  } = useQueryData(
    "/v1/code",
    "get", // method
    "code", // key
  );

  return (
    <>
      <UIHeader />
      <div className="flex">
        <UINavigation />
        <CodeMain isLoading={isLoading} isFetching={isFetching} code={code} />
      </div>
      <UIFooter />
    </>
  );
};

export default UICode
